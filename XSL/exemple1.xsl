<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:output
            method="html"
            encoding="UTF-8"
            indent="yes" />


    <xsl:template match="/">
        <ul>
        <xsl:for-each select="formations/formation">
            <li>
                <xsl:value-of select="titre" />
            </li>
        </xsl:for-each>
        </ul>
    </xsl:template>

</xsl:stylesheet>