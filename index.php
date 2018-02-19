<?php include 'header.php'; ?>

			<h3 class="clr1">Datalogic Software & Sentracare Application</h3>
            <?php
                $product = isset($_REQUEST['product']) ? $_REQUEST['product'] : '';
                
                //exit("Product" . $product);
                
                if ($product != '')
                {
                    switch ($product)
                    {
                        case "01":
                            $title = "  <div class=\"isi\">
                                            <h4>Our Product: </h4>
                                            <h5>Delivery/Pickup/CMN Paitent Material/Custom Forms Companion</h5>
                                        </div>";
                            $image = "01.png";
                            break;
                        case "02":
                            $title = "  <div class=\"isi\">
                                            <h4>Our Product: </h4>
                                            <h5>277CA Reporting </h5>
                                        </div>";
                            $image = "02.gif";
                            break;
                        case "03":
                            $title = "  <div class=\"isi\">
                                            <h4>Our Product: </h4>
                                            <h5>POS Retail</h5>
                                        </div>";
                            $image = "03.png";
                            break;
                        case "04":
                            $title = "  <div class=\"isi\">
                                            <h4>Our Product: </h4>
                                            <h5>Asset Management</h5>
                                        </div>";
                            $image = "04.png";
                            break;
                        case "05":
                            $title = "  <div class=\"isi\">
                                            <h4>Our Product: </h4>
                                            <h5>Scanner Interface</h5>
                                        </div>";
                            $image = "05.jpg";
                            break;
                        case "06":
                            $title = "  <div class=\"isi\">
                                            <h4>Our Product: </h4>
                                            <h5>Remit Companion</h5>
                                        </div>";
                            $image = "06.gif";
                            break;
                        case "07":
                            $title = "  <div class=\"isi\">
                                    <img src=\"072304a.gif\" style=\"margin-bottom: 15px;\"><br>
                                 </div>";;                        
                            $title .= "<div align=\"center\">
                                            <table border=\"0\" width=\"65%\" id=\"table1\">
                                                <tr>
                                                    <td width=\"16%\">
                                                    &nbsp;</td>
                                                    <td colspan=\"5\"><font size=\"5\" color=\"#CC3300\">Complete POS system 
                                                    for the Retail Store Front</font></td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\">&nbsp;</td>
                                                    <td width=\"6%\">
                                                    <img border=\"0\" src=\"ball.png\" width=\"18\" height=\"18\" align=\"middle\"></td>
                                                    <td width=\"76%\" colspan=\"4\">Inter-Linked with Main Inventory&nbsp; 
                                                    and Patient database files</td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\">&nbsp;</td>
                                                    <td width=\"6%\">
                                                    <img border=\"0\" src=\"ball.png\" width=\"18\" height=\"18\" align=\"middle\"></td>
                                                    <td width=\"76%\" colspan=\"4\">Easily Allows for Taxable or Non-Taxable 
                                                    Items</td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\">&nbsp;</td>
                                                    <td width=\"6%\">
                                                    <img border=\"0\" src=\"ball.png\" width=\"18\" height=\"18\" align=\"middle\"></td>
                                                    <td width=\"76%\" colspan=\"4\">Allows for instant receipt printing and 
                                                    &quot;On the Fly&quot; 1500 printing for your Medicare Patients that require 
                                                    Self submitting forms</td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\">&nbsp;</td>
                                                    <td width=\"6%\">
                                                    <img border=\"0\" src=\"ball.png\" width=\"18\" height=\"18\" align=\"middle\"></td>
                                                    <td width=\"76%\" colspan=\"4\">Forced balancing for daily transactions: 
                                                    Safe-guard cash of each register by accountability of use</td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\">&nbsp;</td>
                                                    <td width=\"6%\">
                                                    <img border=\"0\" src=\"ball.png\" width=\"18\" height=\"18\" align=\"middle\"></td>
                                                    <td width=\"76%\" colspan=\"4\">Daily Cash Reports: Management tool for 
                                                    monitoring activity for staffing requirements and efficiency</td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\">&nbsp;</td>
                                                    <td width=\"6%\">
                                                    <img border=\"0\" src=\"ball.png\" width=\"18\" height=\"18\" align=\"middle\"></td>
                                                    <td width=\"76%\" colspan=\"4\">Supports Bar Code scanning:&nbsp; 
                                                    Increases personnel efficiency &amp; Customer satisfaction for ease of 
                                                    check out. Many Bar Code Fonts Available or Use the Packaging Bar 
                                                    Code</td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\">&nbsp;</td>
                                                    <td width=\"6%\">
                                                    <img border=\"0\" src=\"ball.png\" width=\"18\" height=\"18\" align=\"middle\"></td>
                                                    <td width=\"76%\" colspan=\"4\">Utility and Fonts for printing inventory 
                                                    labels and barcodes:&nbsp; Increases personnel efficiency</td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\">&nbsp;</td>
                                                    <td width=\"6%\">
                                                    <img border=\"0\" src=\"ball.png\" width=\"18\" height=\"18\" align=\"middle\"></td>
                                                    <td width=\"76%\" colspan=\"4\">Instant recall for reoccurring patient 
                                                    purchases: Increases personnel efficiency</td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\">&nbsp;</td>
                                                    <td width=\"6%\">
                                                    <img border=\"0\" src=\"ball.png\" width=\"18\" height=\"18\" align=\"middle\"></td>
                                                    <td width=\"76%\" colspan=\"4\">Return and Exchange functionality</td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\">&nbsp;</td>
                                                    <td width=\"6%\">
                                                    <img border=\"0\" src=\"ball.png\" width=\"18\" height=\"18\" align=\"middle\"></td>
                                                    <td width=\"76%\" colspan=\"4\">Special Remarking or Instructions on 
                                                    Receipts for Patients</td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\">&nbsp;</td>
                                                    <td width=\"6%\">
                                                    <img border=\"0\" src=\"ball.png\" width=\"18\" height=\"18\" align=\"middle\"></td>
                                                    <td width=\"76%\" colspan=\"4\">Export routines for special analysis 
                                                    needs: Both Manual and Automatic Settings</td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\">&nbsp;</td>
                                                    <td width=\"6%\">
                                                    <img border=\"0\" src=\"ball.png\" width=\"18\" height=\"18\" align=\"middle\"></td>
                                                    <td width=\"76%\" colspan=\"4\">Easy Company setup</td>
                                                </tr>
                                                <tr>
                                                    <td width=\"98%\" colspan=\"6\">
                                                    <hr color=\"#CC3300\" width=\"100%\" size=\"1\"></td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\" colspan=\"6\">&nbsp;
                                                    <img height=\"400\" width=\"540\" src=\"07.01.gif\" style=\"margin-bottom: 15px;\">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\" colspan=\"6\">&nbsp;
                                                    <img height=\"400\" width=\"540\" src=\"07.02.gif\" style=\"margin-bottom: 15px;\">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\" colspan=\"6\">&nbsp;
                                                    <img height=\"400\" width=\"540\" src=\"07.03.gif\" style=\"margin-bottom: 15px;\">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width=\"16%\" colspan=\"6\">&nbsp;
                                                    <img height=\"400\" width=\"540\" src=\"07.04.png\" style=\"margin-bottom: 15px;\">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                            ";
                            $image = "06.gif";
                            break;
                        case "08":
                            $title = "  <div class=\"isi\">
                                            <h4>Contact and Support: </h4>
                                        </div>";
                            $image = "06.gif";
                            break;
                            
                    }
                    if ($product != "07")
                    {
                        if ($product == "08")
                        {
                            $html = file_get_contents('feedback.htm');
                            echo $html;
                        }
                        else
                        {
                            echo "$title";
                            echo "  <div class=\"isi\">
                                        <img src=\"072304a.gif\" style=\"margin-bottom: 15px;\"><br>
                                        <img height=\"400\" width=\"540\" src=\"$image\" style=\"margin-bottom: 15px;\">                
                                     </div>";
                        }
                    }
                }
                else
                {
                    echo "  <div class=\"isi\">
                                <h4>Our Mission</h4>
                                <h5>Electronic Systems</h5>
                            </div>
                            <div class=\"isi\">
                                <img src=\"072304a.gif\" style=\"margin-bottom: 15px;\">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. Vestibulum condimentum facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero. Cras venenatis. Aliquam posuere lobortis pede. Nullam fringilla urna id leo. Praesent aliquet pretium erat. Praesent non odio. Pellentesque a magna a mauris vulputate lacinia. Aenean viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Aliquam lacus. Mauris magna eros, semper a, tempor et, rutrum et, tortor.</p>
                                <br>
                                <h5>Rental Tracking</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. Vestibulum condimentum facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero. Cras venenatis. Aliquam posuere lobortis pede. Nullam fringilla urna id leo. Praesent aliquet pretium erat. Praesent non odio. Pellentesque a magna a mauris vulputate lacinia. Aenean viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Aliquam lacus. Mauris magna eros, semper a, tempor et, rutrum et, tortor.</p>
                                <br>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. Vestibulum condimentum facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero. Cras venenatis. Aliquam posuere lobortis pede. Nullam fringilla urna id leo. Praesent aliquet pretium erat. Praesent non odio. Pellentesque a magna a mauris vulputate lacinia. Aenean viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Aliquam lacus. Mauris magna eros, semper a, tempor et, rutrum et, tortor.</p>
                                <br>
                                <h5>Reporting Apps</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. Vestibulum condimentum facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero. Cras venenatis. Aliquam posuere lobortis pede. Nullam fringilla urna id leo. Praesent aliquet pretium erat. Praesent non odio. Pellentesque a magna a mauris vulputate lacinia. Aenean viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Aliquam lacus. Mauris magna eros, semper a, tempor et, rutrum et, tortor.</p>
                                <br>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. Vestibulum condimentum facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero. Cras venenatis. Aliquam posuere lobortis pede. Nullam fringilla urna id leo. Praesent aliquet pretium erat. Praesent non odio. Pellentesque a magna a mauris vulputate lacinia. Aenean viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Aliquam lacus. Mauris magna eros, semper a, tempor et, rutrum et, tortor.</p>
                             </div>";               
                }   

include 'footer.php'; 
?>