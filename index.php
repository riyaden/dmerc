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
                        case "101":
                            $title = "
<p style=\"font-size: 24px; font-weight: bold;\">Summary of Software</p>
<hr />
<p style=\"font-size: 16px\">Now featuring Virtual Earth&reg;&nbsp;for Deliveries Mapping<br />
  5010 Approved with 277 Reporting<br />
  ERN 5010 Ready, Reporting, Self Posting<br />
  No Preprinted Forms for Deliveries, CMN's, Invoices &amp; Many others....<br />
  Retail POS System with Bar Coding<br />
  Asset Tracking with Bar Coding<br />
  Purchase Order System<br />
  Programming for WinCE 5.0 &amp; Win Mobile 6.0 Scanners<br />
  Custom Forms for each client<br />
  Conversions Generally at no cost<br />
  Clearing House Submission<br />
After Hours Support</p>
<hr />
<p style=\"font-size: 16px; color: #CC3300; font-weight: bold;\">YOU CAN'T RUN YOUR BUSINESS FROM A WEBSITE APPLICATION</p>                            ";
                            break;
                        case "102":
                            $title  = "<p style=\"font-family: Verdana, Arial, Helvetica, sans-serif;
                                            font-weight: bold;
                                            font-size: 24px;\">About Us</p>
                                        <hr />
                                        <p style=\"font-size: 14px\">Our  company specializes in medical billing systems and we greatly appreciate a  chance to display in our products and services. </p>
                                        <p style=\"font-size: 14px\">Enclosed for  your review and approval are materials on Sentracare; designed specifically for  the health care industry.&nbsp; The enclosed  materials will demonstrate some of the many features of the Sentracare system. <br />
                                        </p>
                                        <p style=\"    font-size: 16px;
                                            font-weight: bold;\">Highlights:</p>
                                        <ol>
                                          <li style=\"font-size: 14px\">Fully HIPAA compliant in all DMERC Regions.&nbsp; Both in electronic transmission and security  matrix.</li>
                                          <li style=\"font-size: 14px\">We do not offer modules or add-on&rsquo;s to our system. Our  product is all inclusive and all updates, Non-Medicare and Medicare (including  HIPAA), are included in our support fees. No Additional/Hidden Costs.</li>
                                          <li style=\"font-size: 14px\">Our systems are compatible with <em><u>Windows , 2000, XP, NT, 2003/08/10 Server, Win7,10</u></em>.</li>
                                          <li style=\"font-size: 14px\">Support is unsurpassed. All software companies will  offer you technical support for a monthly maintenance fee. Unlike others, we  provide support in minutes, not days!</li>
                                        </ol>
                                        <p style=\"font-size: 14px\">Datalogic  breaks its support into three categories:</p>
                                        <ol class=\"style5\">
                                          <li><u>Technical Support</u>: We offer the same technical  support as all other companies, with one exception. Our turn around time on  average is less than 2 hours, if not immediate.</li>
                                          <li><u>Informational Support</u>: We offer what no other  company offers. Our industry experts answer questions concerning billing,  Medicare regulations, Rejections, coding questions etc&hellip;. For all our clients.  We do not believe you will find this kind of support from other companies.</li>
                                          <li><u>Hours</u>: We are available 24/7 for all  emergencies. <em><u>All clients have access  to support via cell or home phone numbers so that if you are outside our time  zone, your support time is not diminished. We are available to you 9am &ndash; 9pm  EST.</u></em></li>
                                        </ol>
                                        <p style=\"font-size: 14px\"><strong>We encourage you to check all references for feedback on  our software and support&nbsp; functions.</strong></p>
                                        <p style=\"font-size: 14px\">Again,  thank you for your interest in our products and services. We look forward to  having a mutually beneficial business relationship and serving as the quality  partner in your future business success. For an extensive look at Datalogic  Software, visit our web site at http://www.sentracare.com or  http://www.dmerc.com&nbsp; &amp;<em> call us at (941) 714-0542 to arrange for an  on-line demo of our software.</em></p>
                                        <p style=\"font-family: Verdana, Arial, Helvetica, sans-serif;
                                            font-size: 14px;\">&nbsp;</p>                            
                            ";
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
                            if ($product != "101" && $product != "102")
                            {
                                echo "  <div class=\"isi\">
                                            <img src=\"072304a.gif\" style=\"margin-bottom: 15px;\"><br>
                                            <img height=\"400\" width=\"540\" src=\"$image\" style=\"margin-bottom: 15px;\">                
                                         </div>";
                            }
                        }
                    }
                }
                else
                {
                    echo "  <table border=\"0\" width=\"700\" id=\"table1\">
                                <tbody><tr>
                                    <td><img border=\"0\" src=\"./here_files/hereiswhat.gif\" width=\"283\" height=\"118\"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>                                
                                <tr>
                                    <td style=\"font-size:18px; color:red\" align=\"center\">
                                    <b>
                                    Don't mold you business around software<br>
                                    Let us mold our software to your business
                                    </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>                                
                                <tr>
                                    <td>
                                    <p class=\"MsoNormal\" align=\"justify\"><b><font face=\"Arial\" color=\"#0000FF\" size=\"2\">In a rather 
                                    complex world, Datalogic takes a decidedly simplistic view of 
                                    business. We provide a quality product and a level of 
                                    service that is never compromised. We operate from a 
                                    business and a customer prospective. So that there is a 
                                    balance between everyone's needs. </font></b></p>
                                    <p class=\"MsoNormal\" align=\"justify\">&nbsp;</p>
                                    <p class=\"MsoNormal\" align=\"justify\"><b>
                                    <font face=\"Arial\" size=\"2\" color=\"#0000FF\">More over..... Our software 
                                    is designed by DME owners and users. Ours is not designed by programmers 
                                    in a vacuum with no conception of how it is to be used or sold by 
                                    individuals that know nothing of the industry or it's complexities. <br>
                            &nbsp;</font></b></p>
                                    <p class=\"MsoNormal\"><b><font face=\"Arial\" color=\"#0000FF\" size=\"2\">Here 
                                    is just some of what you can expect....</font></b></p>
                                    <ol style=\"margin-top: 0in; margin-bottom: 0in; color:#0000FF\" start=\"1\" type=\"1\">
                                        <li class=\"MsoNormal\">
                                        <font face=\"Arial\" color=\"#FF0000\" size=\"2\"><b>We are available for support whenever you need it</b></font><font face=\"Arial\" color=\"#0000FF\" size=\"2\">. If it is Wednesday @ 8pm 
                                        or Saturday morning, we are accessible. No voice mail, no complex 
                                        menus, just live help every time.</font></li>
                                        <li class=\"MsoNormal\">
                                        <font face=\"Arial\" color=\"#FF0000\" size=\"2\"><b>We don’t use salesman</b>.</font><font face=\"Arial\" color=\"#0000FF\" size=\"2\"> Salesman provide for an extra 
                                        50%+ to the purchase 
                                        price. Additionally, salesman often inflate the attributes of the 
                                        system leading to dissatisfaction later, AFTER, you have invested in 
                                        the software. </font></li>
                                        <li class=\"MsoNormal\"><font face=\"Arial\" color=\"#0000FF\" size=\"2\">Our 
                                        promise: If the software will do what you require… we will tell you. 
                                        If the software will not do what you require… we will tell you up 
                                        front. <u>Let our  </u></font><u>
                                        <font face=\"Arial\" color=\"#FF0000\" size=\"2\"><b>R</b></font><b><font face=\"Arial\" color=\"#FF0000\" size=\"2\">eferences</font></b><font face=\"Arial\" color=\"#0000FF\" size=\"2\"> speak for themselves</font></u><font face=\"Arial\" color=\"#0000FF\" size=\"2\">.</font></li>
                                        <li class=\"MsoNormal\"><font face=\"Arial\" color=\"#0000FF\" size=\"2\">We do not 
                                        set pricing based on the industry standard. Our pricing is based 
                                        lower than some of the larger companies, based largely on the idea 
                                        that profit levels are not the only consideration. </font></li>
                                        <li class=\"MsoNormal\"><font face=\"Arial\" color=\"#0000FF\" size=\"2\">Our 
                                        software products have more functionality and features than even the 
                                        more expensive packages only because we have taken greed out of the 
                                        equation.</font></li>
                                        <li class=\"MsoNormal\">
                                        <b>
                                        <font face=\"Arial\" color=\"#FF0000\" size=\"2\">We DO NOT charge for 
                                        most conversions</font></b><font face=\"Arial\" color=\"#0000FF\" size=\"2\">. 
                                        Here is why….. Most companies have converted data before; therefore 
                                        the programs are written, OR, generally speaking conversion 
                                        programming is quite easy and companies use this as a way to extract 
                                        more money from you that is pure profit.</font></li>
                                        <li class=\"MsoNormal\"><b>
                                        <font face=\"Arial\" size=\"2\" color=\"#FF0000\">We have been here since 1979</font></b><font face=\"Arial\" size=\"2\"> and were one of the first in the nation to complete the HIPAA transition with the DMERC's ... we will be here far into the 
                                        future to meet your changing needs.</font></li>
                                        <li class=\"MsoNormal\"><font face=\"Arial\" size=\"2\">We provide your 
                                        home state Medicaid Direct @ no extra cost.</font></li>
                                        <li class=\"MsoNormal\"><font face=\"Arial\" size=\"2\">We provide 
                                        \"incentive free\" <b><font color=\"#FF0000\">Clearing House Services</font></b>. No vendor incentive = 
                                        lowest possible pricing.</font></li>
                                        <li class=\"MsoNormal\"><font face=\"Arial\" size=\"2\">A <u>specially 
                                        designed set of reports </u>available to enhance your ability to 
                                        collect outstanding balances by quickly identifying areas of needed 
                                        concentration. </font></li>
                                        <li class=\"MsoNormal\"><font face=\"Arial\" size=\"2\">Finally, <b>
                                        <font color=\"#FF0000\">Unlimited Training</font></b>, we take 
                                        you step by step through the software, teaching stage by stage. We 
                                        stay with you all the way though the transmission stages of ALL of 
                                        you billings till you are comfortable with the process. We will not 
                                        just throw a manual at you and leave.</font></li>
                                        <li class=\"MsoNormal\"><b>
                                        <font size=\"2\" face=\"Arial\" color=\"#FF0000\">
                                        No preprinted forms</font></b><font face=\"Arial\" size=\"2\"> (except 
                                        1500's) No delivery, CMN, Custom Handout, Invoices, other individual 
                                        specific information. </font></li>
                                        <li class=\"MsoNormal\"><font face=\"Arial\" size=\"2\">All
                                        <font color=\"#FF0000\"><b>Y</b></font><b><font color=\"#FF0000\">our 
                                        Customer Related Forms Incorporated as needed </font></b>for patient 
                                        education.</font></li>
                                        <li class=\"MsoNormal\"><b>
                                        <font face=\"Arial\" size=\"2\" color=\"#FF0000\">You Can Not Run An 
                                        Effective Business From a Website</font></b></li>
                                    </ol>
                                    <p class=\"MsoNormal\"><font face=\"Arial\" color=\"#0000FF\" size=\"2\">&nbsp;</font></p>
                                    <p class=\"MsoNormal\"><font face=\"Arial\" color=\"#0000FF\" size=\"2\">Your 
                                    individual questions and motivating factors for a new software product 
                                    are going to be unique. That is why, we are willing to make </font>
                                    <font face=\"Arial\" color=\"#FF0000\" size=\"2\">C</font><b><font face=\"Arial\" color=\"#FF0000\" size=\"2\">hanges 
                                    That Provide For Your Specific Needs (Now, Not after months of meetings)</font></b><font face=\"Arial\" color=\"#0000FF\" size=\"2\"> 
                                    and generally we do this at no charge to you. If there is additional 
                                    cost involved, we will discuss that upfront before your decisions are 
                                    made. Sometimes, \"you get what you pay for\" just isn't true.</font></p>
                                    <p class=\"MsoNormal\"><font face=\"Arial\" color=\"#0000FF\">&nbsp;</font></p>
                                    <font face=\"Arial\" color=\"#0000FF\"><span style=\"font-size: 12.0pt\">This 
                                    is who we are….. The choice is yours</span></font><span style=\"font-size: 12.0pt; font-family: Times New Roman\">.</span><p>&nbsp;</p></td>
                                </tr>
                            </tbody></table>
                    ";               
                }   

include 'footer.php'; 
?>