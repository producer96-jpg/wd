<?xml version="1.0"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">

<html>
<head>
<title>Student Result</title>
</head>

<body>
<h2>Student Result List</h2>

<table border="1">
<tr bgcolor="lightblue">
    <th>Name</th>
    <th>Roll</th>
    <th>Marks</th>
    <th>Result</th>
</tr>

<xsl:for-each select="students/student">
<tr>
    <td><xsl:value-of select="name"/></td>
    <td><xsl:value-of select="roll"/></td>
    <td><xsl:value-of select="marks"/></td>

    <td>
        <xsl:choose>

            <xsl:when test="marks &gt;= 50">
                <span style="color:green; font-weight:bold;">
                    Pass
                </span>
            </xsl:when>

            <xsl:otherwise>
                <span style="color:red; font-weight:bold;">
                    Fail
                </span>
            </xsl:otherwise>

        </xsl:choose>
    </td>

</tr>
</xsl:for-each>

</table>
</body>
</html>

</xsl:template>
</xsl:stylesheet>