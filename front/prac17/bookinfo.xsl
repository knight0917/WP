<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
        <head>
            <link rel="stylesheet" href="xml.css"/>
        </head>
            <body>
            <h2> My Books collection</h2>
            <table>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>ISBN</th>
                    <th>Publisher</th>
                    <th>price</th>
                </tr>

                <xsl:for-each select="bookstore/book">
                <tr>

                    <td><xsl:value-of select="title"/></td>

                    <xsl:choose>

                        <xsl:when test="price &lt; 50">
                            <td>
                                <xsl:value-of select="author"/>
                            </td>
                        </xsl:when>

                        <xsl:when test="price &gt; 50 and price &lt; 100">
                            <td>
                                <xsl:value-of select="author"/>
                            </td>
                        </xsl:when>

                        <xsl:otherwise>
                            <td>
                                <xsl:value-of select="author"/>
                            </td>
                        </xsl:otherwise>

                    </xsl:choose>
                    <td>
                        <xsl:value-of select="ISBN"/>
                    </td>
                    <td>
                        <xsl:value-of select="publisher"/>
                    </td>
                    <td>
                        <xsl:value-of select="price"/>
                    </td>

                </tr>

                </xsl:for-each>
            </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>