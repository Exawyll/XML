<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:output
            method="html"
            encoding="UTF-8"
            indent="yes" />


    <xsl:template match="/">

        <html lang="en">
            <head>
                <meta charset="utf-8"/>
                <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
                <meta name="viewport" content="width=device-width, initial-scale=1"/>
                <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                <title>Bootstrap 101 Template</title>

                <!-- Bootstrap -->
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>

                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
                <style>

                </style>
            </head>
            <body>
                <div class="container">
                    <div class="row">
                        <xsl:apply-templates select="eleves/eleve"/>
                    </div>

                </div>

                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->

                <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            </body>
        </html>
    </xsl:template>

    <xsl:template match="eleve">
        <div class="col-md-4 col-sm-6">

            <div class="thumbnail">
                <xsl:element name="img">
                    <xsl:attribute name="src">
                        <xsl:value-of select="photo"/>
                    </xsl:attribute>
                </xsl:element>
                <div class="caption">
                    <h3>
                        <xsl:value-of select="etatcivil/nom"/>&#160;<xsl:value-of select="etatcivil/prenom"/>
                       <span class="small"> (<xsl:value-of select="@numero"/>)</span>
                    </h3>
                   <h4>Formation</h4>
                    <ul>
                        <li><xsl:value-of select="formation/diplome"/></li>
                        <li><xsl:value-of select="formation/classe"/></li>
                    </ul>
                    <h4>Entreprise</h4>
                    <ul>
                        <li><xsl:value-of select="entreprise/nom"/></li>
                        <li>tel: <xsl:value-of select="entreprise/telephone"/></li>
                        <li>siren: <xsl:value-of select="entreprise/@siren"/></li>
                    </ul>
                </div>
            </div>

        </div>
    </xsl:template>


</xsl:stylesheet>