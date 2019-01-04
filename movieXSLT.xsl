<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema"
    exclude-result-prefixes="xs"
    version="2.0">
    <xsl:template match = "/">
        <html>
            <head><title>My Movie Database</title></head>
            <body>
                <h2>My Movie Database</h2>
                <table border="2">
                    <tr bgcolor=" #ffa366">
                        <td>Name</td>
						<td>Category</td>
                        <td>Description</td>
                        <td>Director</td>
                        <td>Release Date</td>
                    </tr>
                    <xsl:for-each select="/dvd/film"> <!-- Select all the nodes in the xml file -->
                        <tr>
                            <td><xsl:value-of select="title"/></td>
							<td><xsl:value-of select="@category"/></td>
                            <td><xsl:value-of select="description"/></td>
                            <td><xsl:value-of select="director"/></td>
                            <td><xsl:value-of select="releaseDate"/></td>
                        </tr>
                    </xsl:for-each>
                    <tr></tr>
                </table>
            </body>
        </html>
        
    </xsl:template>
</xsl:stylesheet>