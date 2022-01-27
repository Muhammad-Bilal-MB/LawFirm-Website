<html>
    <head>

        
        <title>The Firm </title>
        <link rel="stylesheet" href="activecases.css">

        <script>
            function Push(obj){
                var Text1=document.getElementById('Run');
                var Pushed=obj.innerHTML;
                if (Pushed=="Murder Cases"){
                    Text1.innerHTML="Murder is perhaps the single most serious criminal offense. Depending on the circumstances surrounding the killing, a person who is convicted of murder may be sentenced to many years in prison, a prison sentence with no possibility of Parole, or death.The precise definition of murder varies from jurisdiction to jurisdiction. Under the Common Law, or law made by courts, murder was the unlawful killing of a human being with malice aforethought. The term malice aforethought did not necessarily mean that the killer planned or premeditated on the killing, or that he or she felt malice toward the victim. Generally, malice aforethought referred to a level of intent or reck-lessness that separated murder from other killings and warranted stiffer punishment.";
                }else if (Pushed=="Divorce Cases"){
                    Text1.innerHTML="Divorce, also known as dissolution of marriage, is the process of terminating a marriage or marital union. Divorce usually entails the canceling or reorganizing of the legal duties and responsibilities of marriage, thus dissolving the bonds of matrimony between a married couple under the rule of law of the particular country or state. Divorce laws vary considerably around the world,[1] but in most countries, divorce requires the sanction of a court or other authority in a legal process, which may involve issues of distribution of property, child custody, alimony child visitation / access, parenting time, child support, and division of debt. In most countries, monogamy is required by law, so divorce allows each former partner to marry another person.When those that are in a common-law relationship break up, it is referred to as separation, instead of a divorce.Divorce is different from annulment, which declares the marriage null and void, with legal separation or de jure separation (a legal process by which a married couple may formalize a de facto separation while remaining legally married) or with de facto separation (a process where the spouses informally stop cohabiting). Reasons for divorce vary, from sexual incompatibility or lack of independence for one or both spouses to a personality clash.";
                }else if (Pushed=="Narcotics Cases"){
                    Text1.innerHTML="Control of Narcotic Substances Act (XXV of 1997), S. 9(c)---Possession of narcotics---Report of Government Analyst---protocol s/procedure---Scope---Substantial/sufficient compliance with R. 6 of the Control of Narcotic Substances (Government Analysts) Rules, 2001 ('Rule 6')---Plea on behalf of accused that forensic report in the present case did not mention the details of protocol s used, as such the nature of contraband was never established---Held, that tests carried out by the analyst were vividly mentioned in his report, under the heading Test Performed on Received Item(s) of Evidence followed by the heading Results and Conclusions---Said details in the forensic report substantially/sufficiently qualified to meet the statutory requirements under R. 6 of Control of Narcotic Substances (Government Analysts) Rules, 2001---Conviction of accused under S. 9(c) of Control of Narcotic Substances Act, 1997 was maintained---Petition for leave to appeal was dismissed. ";
                }else if (Pushed=="Theft Cases"){
                    Text1.innerHTML="Theft, in law, a general term covering a variety of specific types of stealing, including the crimes of larceny, robbery, and burglary.Theft is defined as the physical removal of an object that is capable of being stolen without the consent of the owner and with the intention of depriving the owner of it permanently. The thief need not intend to keep the property himself; an intention to destroy it, sell it, or abandon it in circumstances where it will not be found is sufficient. Automobile theft, for example, frequently involves selling the stolen car or its parts. In some instances an intention to deprive the owner of the property temporarily also is sufficient, as in the case of stealing a car for a “joyride” and then abandoning it in such a way that the owner is able to reclaim it.Larceny is the trespassory taking and carrying away of personal goods from the possession of another with the intention to steal. ";
                }else if (Pushed=="Robery Cases"){
                    Text1.innerHTML="Bank robbery is the crime of stealing money from a bank, specifically while bank employees and customers are subjected to force, violence, or a threat of violence. This refers to robbery of a bank branch or teller, as opposed to other bank-owned property, such as a train, armored car, or (historically) stagecoach. It is a federal crime in the United States.According to the Federal Bureau of Investigation's Uniform Crime Reporting Program, robbery is the taking or attempting to take anything of value from the care, custody, or control of a person or persons by force or threat of force or violence or by putting the victim in fear. By contrast, burglary is unlawful entry of a structure to commit a felony or theft."
                }
            }
        </script>
    </head>
    <body>
        <div class="Header">
            <div class="Container">
                <div class="NavBar">
                    <div class="Logo" >
                        <img src="Img/law.png" >
                    </div>
                </div> 
            </div> 
        </div>
        
        <!-------------- Featured Products-------->
        <div id="cc" class="Content-Container">
                 
            <nav id="nav;" class="topnav">
                <ul style="display:flex; justify-content: center; list-style: none;">
                    <li style="display: inline-block;">
                        <a href="../mysite/Index MediaQuery.html" style="color: whitesmoke; font-size: 18px; text-decoration: none; text-align: center; padding: 14px;">
                            Home
                        </a>
                    </li>
                    <div class="dropdown">
                        <li style="display: inline-block;"><a class="dropbtn" href="#" style="color: whitesmoke; font-size: 18px; text-decoration: none; text-align: center; padding: 14px;">
                            Lawyers
                        </a>
                            <div class="dropdown-content">
                                <a href="../mysite/Lawyersmale.html" >Male</a>
                                <a href="../mysite/Lawyersfemale.html">Female</a>
                            </div>
                        </li>
                    </div>
                    <li style="display: inline-block;">
                        <a href="file:///C:/Users/Faizan/Desktop/mysite/mysite/Less%20Practice/index.html" style="color: whitesmoke; font-size: 18px; text-decoration: none; text-align: center; padding: 14px;">
                            Contact Us
                        </a>
                    </li>
                    <li style="display: inline-block;">
                        <a href="../mysite/About.html" style="color: whitesmoke; font-size: 18px; text-decoration: none; text-align: center; padding: 14px;">
                            About
                        </a>
                    </li>
                </ul>
            </nav>

            
            
            <div class="Content">

                <div class="main">

                    <table class="LawDetails">
                        <tr>
                            <td > <h1 style="padding-left: 20px;padding-bottom: 10px;">Active Cases</h1>
                                <h4 onclick="Push(this)">Murder Cases</h4><br>
                                <h4 onclick="Push(this)">Divorce Cases</h4><br>
                                <h4 onclick="Push(this)">Narcotics Cases</h4><br>
                                <h4 onclick="Push(this)">Theft Cases</h4><br>
                                <h4 onclick="Push(this)">Robery Cases</h4><br>
                                
                            </td>
                
                        </tr>
                    </table>
                    <div class="Details">
                        <p id="Run"> Click On a Case From The List To Know Its Details.</p>
                    </div>
                
                 </div>


            </div>
                  
            </div>
            
            <!------Footer------->
            <div class="Footer">
                        <div class="App-Logo">
                            <img src="Img/law.png">
                        </div>
                <hr>
                <p class="Copyright">Copyright 2021 - Law Firm Website</p>
            </div>

           
    </body>
</html>

