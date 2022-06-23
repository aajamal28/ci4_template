<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Label</title>

    <style type="text/css">
        body {
            font-size: 11px;
            font-family: sans-serif;
            margin: 0px;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 0; $i < 4; $i++) :
    ?>
        <table width="100%">
            <tr>
                <td width="50%">
                    <table width="100%" border="1">
                        <tr>
                            <td colspan="2" class="text-center"> V05:M&M PRINTERS SDN. BHD. </td>
                        </tr>
                        <tr>
                            <td width="50%" class="text-center">
                                <i>Part No :</i> <br />
                                ESTAMP-SDP-1A
                            </td>
                            <td rowspan="2" class="text-center">
                                {{ QR Code }}
                            </td> 
                        </tr>
                        <tr>
                            <td width="50%" class="text-center">
                                <i>Part Name :</i> <br />
                                ORDERSHEET-TPOP
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <i>Lot no :</i> <br />
                                123425365363n4xi45
                            </td>
                            <td class="text-center">
                                <i>Qty :</i> <br />
                                5
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <i> Ref. No :</i> <br />
                                00ND1ON28XVNR89B
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <i> Ref. No :</i> <br />
                                00ND1ON28XVNR89B
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table width="100%" border="1">
                        <tr>
                            <td colspan="2"> V05:M&M PRINTERS SDN. BHD. </td>
                        </tr>
                        <tr>
                            <td width="50%">
                                <i>Part No :</i> <br />
                                ESTAMP-SDP-1A
                            </td>
                            <td rowspan="2"> {{ QR CODE }} </td>
                        </tr>
                        <tr>
                            <td width="50%">
                                <i>Part Name :</i> <br />
                                ORDERSHEET-TPOP
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i>Lot no :</i> <br />
                                123425365363n4xi45
                            </td>
                            <td>
                                <i>Qty :</i> <br />
                                5
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <i> Ref. No :</i> <br />
                                00ND1ON28XVNR89B
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <i> Ref. No :</i> <br />
                                00ND1ON28XVNR89B
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    <?php
    endfor;
    ?>
</body>

</html>