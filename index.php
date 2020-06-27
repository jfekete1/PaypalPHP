<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>PayPal integration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #container {
            width: 100%;
            max-width: 500px;
            display: table;
            margin: 150px auto 0;
        }

        .productBlock {
            width: 100%;
            max-width: 200px;
            display: table;
            margin: 0 auto;
            border: 3px solid #777;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div>
        <div id="container">
            <div class="productBlock">
                <p>Size: 10 MP</p>
                <p>Date: 12/12/2021</p>
                <p>Author: Victor</p>

                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
                    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.sandbox.paypal.com/hu_HU/i/scr/pixel.gif" width="1" height="1">
                </form>

            </div>
        </div>
    </div>
</body>

</html>