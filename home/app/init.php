<?php

require_once('vendor/autoload.php');
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

use Elastic\Elasticsearch\ClientBuilder;
use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberFormat;
use libphonenumber\NumberParseException;


$client = ClientBuilder::create()
    ->setHosts(['http://127.0.0.1:9200'])
    ->build();



function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}


function validatePhoneNumber($phoneNumber)
{
    $phoneNumberUtil = PhoneNumberUtil::getInstance();

    try {
        // Egypt
        $parsedNumber = $phoneNumberUtil->parse($phoneNumber, 'EG');

        // Egypt or any region
        if ($phoneNumberUtil->isValidNumberForRegion($parsedNumber, 'EG') || $phoneNumberUtil->isValidNumber($parsedNumber)) {
            // Format the phone number 
            $formattedNumber = $phoneNumberUtil->format($parsedNumber, PhoneNumberFormat::E164);

            return $formattedNumber;
        }
    } catch (NumberParseException $e) {
        return false;
    }

    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['query'])) {
    $query = $_POST['query'];
    $index = isset($_POST['index']) ? $_POST['index'] : '';

    $allfiles = ['file_1','file_2'];

    if (validateEmail($query) || validatePhoneNumber($query)) {
        $params = [
            'index' => $allfiles,
            'body' => [
                'size' => 10000,
                'query' => [
                    'query_string' => [
                        'query' => "*$query*",
                        'default_field' => '*',
                    ],
                ],
            ],
        ];

        $response = $client->search($params);
        $results = $response['hits']['hits'];

        $breached = false;
        $fromFacebook = false;
        $fromLinkedIn = false;

        foreach ($results as $result) {
            if (isset($result)) {
                $breached = true;
                //facebook leaks
                if ($result['_index'] === 'face1' || $result['_index'] === 'facebook_1' || $result['_index'] === 'file_1'|| $result['_index'] === 'file_2') {
                    $fromFacebook = true;
                }
                //linkedin leaks
                if ($result['_index'] === 'link1') {
                    $fromLinkedIn = true;
                }
            }
        }

        if (!$breached) {
            $popupTitle = 'Good news';
            $popupContent = '<div class="black-color"><h4 class="suc">No pwnage found!</h4><p>No breached accounts</p></div>';
            $popupIcon = 'success';
            $popupFooter = '<a href="../faq/faq.html#avoid">How to avoid breaches?</a>';


            echo '<script>
                document.getElementById("my-template").innerHTML = `
                    <swal-title>
                        ' . $popupTitle . '
                    </swal-title>
                    <swal-html>
                        ' . $popupContent . '
                    </swal-html>
                    <swal-icon type="' . $popupIcon . '" color="' . ($popupIcon === "success" ? "var(--main-color)" : "red") . '"></swal-icon>
                    <swal-button color="var(--main-color)" type="cancel">
                        ' . ($popupIcon === "success" ? "Great!" : "Ok") . '
                    </swal-button>
                    <swal-footer>' . $popupFooter . '</swal-footer>`;
                Swal.fire({
                    template: "#my-template",
                });
            </script>';
        } else {
            $popupTitle = 'Oops...';
            $popupContent = '<div class="black-color"><h4 class="faild">Pwned!</h4><p>Pwned in data breaches and found paste</p></div>';
            
            $popupIcon = 'error';
            $popupFooter = '<a href="../faq/faq.html#breached">I found that my email was breached, now what?</a>';

            //facebook leaks 
            if ($fromFacebook) {
                // here frontend edit
                $popupPasted= 'from Facebook 2021';
            }
            //linkedin leaks
            if ($fromLinkedIn) {
                // here frontend edit
                $popupPasted= 'from LinkedIn 2016';
            }

            echo '<script>
                document.getElementById("my-template").innerHTML = `
                    <swal-title>
                        ' . $popupTitle . '
                    </swal-title>
                    <swal-html>
                        ' . $popupContent . '
                        ' . $popupPasted . '
                    </swal-html>
                    <swal-icon type="' . $popupIcon . '" color="' . ($popupIcon === "success" ? "var(--main-color)" : "red") . '"></swal-icon>
                    <swal-button color="var(--main-color)" type="cancel">
                        ' . ($popupIcon === "success" ? "Great!" : "Ok") . '
                    </swal-button>
                    <swal-footer>' . $popupFooter . '</swal-footer>`;
                Swal.fire({
                    template: "#my-template",
                });
            </script>';
        }
    } else {
        // here frontend edit
        echo " enter a valid email address or phone number ";
    }
}
