<!--
	PHP Modularization and Abstracting Demo
	Copyright (C) 2008 Doug Vanderweide
	
	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo PAGE_TITLE; ?></title>
        <link href="twoColFixRtHdr.css" rel="stylesheet" type="text/css" />
        <meta name="description" content="<?php echo PAGE_DESC; ?>" />
	<meta name="keywords" content="<?php echo PAGE_KEYWORDS; ?>" />
        <!--[if IE 5]>
            <style type="text/css"> 
                /* place css box model fixes for IE 5* in this conditional comment */
                .twoColFixRtHdr #sidebar1 { width: 220px; }
            </style>
        <![endif]-->
        <!--[if IE]>
            <style type="text/css"> 
                /* place css fixes for all versions of IE in this conditional comment */
                .twoColFixRtHdr #sidebar1 { padding-top: 30px; }
                .twoColFixRtHdr #mainContent { zoom: 1; }
                /* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
            </style>
        <![endif]-->
    </head>
    
    <body class="twoColFixRtHdr">
        <div id="container">
            <div id="header">
            	<h1>Header</h1>
            <!-- end #header -->
            </div>
            <div id="sidebar1">
                <h3>Navigation</h3>
                <p>Home</p>
                <p>Header page</p>
                <p>Footer page</p>
            <!-- end #sidebar1 -->
            </div>
            <div id="mainContent">
