
<!DOCTYPE html> 
<html lang="de">
    <head>
        <title>Like a BOSS</title>
        <style type="text/css">
        /* GLOBAL */
        body {
            font-family: sans-serif;
        }
        hr {
            text-align: center;
            width: 680px;
        }

        /* PANNEL */
        #pannel {
            /* Grund Einstellungen */
            width: 700px;
            height: auto;
            background-color: #FEFFED;
            border: 1px solid black;
            margin: 20px 20px 20px 20px; 
            padding: 20px 20px 20px 20px;
            
        }
        #pannel p {
            /* Remove Spaces */
            margin: 0px 0px 0px 0px; 
            padding: 0px 0px 0px 0px;

        }
        #pannel #up td {
        /*  border: 1px solid red; */
            width: 120px;
            height: auto;
        }
        #pannel #down td {
            width: 250px;
            height: auto;
        }
        
        /* APPLY */
        #apply {
            /* Grund Einstellungen */
            width: 700px;
            height: auto;
            background-color: #FEFFED;
            border: 1px solid black;
            margin: 20px 20px 20px 20px; 
            padding: 20px 20px 20px 20px;
        }
        #apply #blue {
            color: blue;
        }
        #apply p {
            /* Remove Spaces */
            margin: 0px 0px 0px 0px; 
            padding: 0px 0px 0px 0px;

        }
        #apply #fett {
            font-weight: bold;
            font-size: 20px;
            padding: 5px 0px 5px 0px;

        }

            /* On Error */
        #red {
            color: red;
        }
        </style>
        <?php
        // Also submit ist TRUE wenn überall etwas enthalten ist.
            $submit = false;
            if(!empty($_GET["nachnahme"]) && 
            !empty($_GET["vorname"]) && 
            !empty($_GET["email"]) && 
            !empty($_GET["stiftleisten"]) &&
            !empty($_GET["cpu"]) &&
            (!empty($_GET["ram"]) || 
            !empty($_GET["rom"])
            )) {$submit = true;}
        ?>
    </head>
    <body>
        <div id="pannel">
            <form action="" method="get">
                <h1>Angebotserstellung f&uuml;r Mikrocomputer
                </h1>
                <hr>
                <h4>Geben Sie Ihre pers&ouml;nliche Daten an:
                </h4>
                    <table id="up">
                        <tr>
                            <td>
                                <p>Nachnahme:
                                </p>
                            </td>
                             <td>
                                <input type="text" name="nachnahme" size="15" value="<?php echo (empty($_GET["nachnahme"])) ? '': $_GET["nachnahme"]; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Vorname: 
                                </p>
                            </td>
                            <td>
                                <input type="text" name="vorname" size="15" value="<?php echo (empty($_GET["vorname"])) ? '': $_GET["vorname"]; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>E-Mail Adresse: 
                                </p>
                            </td>
                            <td>
                                <input type="email" name="email" size="15" value="<?php echo (empty($_GET["email"])) ? '': $_GET["email"]; ?>">
                            </td>
                        </tr>
                    </table>
                    <table id="down">
                        <tr>
                            <hr>
                            <h4>W&auml;hlen Sie die gew&ouml;nschten Komponenten aus:
                            </h4>
                        </tr>
                        <tr>
                            <td>
                                <p>Mikrocomputer ohne Stiftleisten: 
                                </p>
                            </td>
                            <td>
                                <input type="radio" name="stiftleisten" value="add" <?php echo (!empty($_GET["stiftleisten"]) ? (($_GET["stiftleisten"] == "add") ? 'checked': '') : ''); ?>>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Mikrocomputer mit Stiftleisten: 
                                </p>
                            </td>
                            <td>
                                <input type="radio" name="stiftleisten" value="remove" <?php echo (!empty($_GET["stiftleisten"]) ? (($_GET["stiftleisten"] == "remove") ? 'checked': '') : ''); ?>>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>CPU 12MHz 
                                </p>
                            </td>
                            <td>
                                <input type="radio" name="cpu" value="12" <?php echo (!empty($_GET["cpu"]) ? (($_GET["cpu"] == "12") ? 'checked': '') : ''); ?>>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>CPU 18MHz 
                                </p>
                            </td>
                            <td>
                                <input type="radio" name="cpu" value="18" <?php echo (!empty($_GET["cpu"]) ? (($_GET["cpu"] == "18") ? 'checked': '') : ''); ?>>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>RAM 64KB 
                                </p>
                            </td>
                            <td>
                                <input type="checkbox" name="ram" value="add" <?php echo (!empty($_GET["ram"]) ? (($_GET["ram"] == "add") ? 'checked': '') : ''); ?>>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>ROM 64KB  
                                </p>
                            </td>
                            <td>
                                <input type="checkbox" name="rom" value="add" <?php echo (!empty($_GET["rom"]) ? (($_GET["rom"] == "add") ? 'checked': '') : ''); ?>>
                            </td>
                        </tr>
                    </table>
                <hr>
                <br>
                <p>
                    <input type="reset" value="Abbrechen">
                    <input type="submit" value="Absenden">
                </p>
            </form>
        </div>
        <?php if($submit) { ?>
        <div id="apply">
            <h1 id="blue">Angebot Mikrocomputer
            </h1>
            <hr>
            <p id="fett">Sehr geehrter Herr Max Muster,
            </p>
            <p>wir bedanken uns f&uuml;r Ihre Nachfrage und bieten wie folgt an:
            </p>
            <br>
            <p>Mikrocomputer 116.- &euro;
            </p>
            <p>Mikroprozessor 15.- &euro;
            </p>
            <p>RAM Speicher 10.- &euro;
            </p>
            <p>ROM Speicher 12.- &euro;
            </p>
            <br>
            <p id="fett">Gesamtkosten: 153.- &euro;
            </p>
            <br>
            <p>Wir w&uuml;rden uns freuen, Ihren gesch&auml;teb Auftrag zu erhalten.
            </p>
            <p>Ihre MC-Profi GmbH
            </p>
        </div>
        <?php } ?>
    </body>
</html>
