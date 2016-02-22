<?php
/*
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
*/

	require_once('connect.php');
	
	define('PAGE_TITLE', 'PHP Modularization And Abstraction');
	define('PAGE_DESC', 'Demonstrates how to use include files in PHP to modularize and abstract basic design and tasks.');
	define('PAGE_KEYWORDS', 'PHP modularization abstraction programming');
	
	require_once('header.php');
?>
<h1>Hello World!</h1>
<p>If all went according to plan, you should see this page appear in the <a href="index.html">same page design</a> we broke into header and footer elements, but with unique content, a proper title, and good <code>META</code> information.</p>
<?php
	require_once('footer.php');
?>
