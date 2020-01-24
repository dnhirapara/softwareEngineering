<%-- 
    Document   : addtocart
    Created on : Jan 24, 2020, 4:47:25 PM
    Author     : user1
--%>

<%@page import="java.lang.String"%>
<%@page import="java.util.Enumeration"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <%
            Enumeration<String> e = request.getParameterNames();
            //out.print(s);
            out.println((String)e.nextElement());
            while(e.hasMoreElements()){
                out.println((String)e.nextElement());
            }
        %>
    </body>
</html>
