<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="problem.css">
    <title>Samirs Sandbox</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Work+Sans:wght@300&display=swap"
        rel="stylesheet">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Samir's Sandbox" />
    <meta property="og:description"
        content="Lil project I'm working on.  Contains info on minecraft servers I'm running" />
    <meta property="og:url" content="https://samiweb.herokuapp.com/" />
</head>

<body class="body">
    <div class="containerContainingContainer">
        <div class="mainContainer">
            <div class="pageSelectContainer">
                <button class="pageSelButton" onclick='showPage(0, "#2F2D2F")'>Home</button>
                <button class="pageSelButton" onclick='showPage(1, "#2F2D2F")'>Minecraft</button>
            </div>
            <div class="pageContainer">
                <div class="pageOneIntro">
                    <h1>SAMIR</h1>
                    <p>NOIVCE PROGRAMMAR WITH INTRESTS ALL OVER THE PLACE</p>
                    <div>
                        <a>DESIGN</a>
                        <a href="#projects">PROJECTS</a>
                    </div>
                    <h2>HTML, PHP, CSS, JS, PY, ETC</h2>
                </div>
                <div class="spacer wave1"></div>
                <div class="spotifya"><a target="_blank"
                        href="https://open.spotify.com/user/smonsonis1?si=6f7ec11772e24efc&nd=1">FOLLOW MY SPOTIFY</a>
                </div>

                <div class="spacer wave2"></div>
                <div class="pageOneProjects">
                    <!-- <button class="dropdownButton" onclick="enableDropdown(0, '26px')">AHH</button>
                    <div class="dropdown">
                        <p>dsfiuhgsfd</p>
                    </div> -->
                    <div class="projectsHeaders" id="projects">
                        <h1>PROJECTS</h1>
                        <p>JUST SOME LITTLE THINGS I'VE BEEN MAKING</p>
                    </div>
                    <div class="projectHolder">
                        <div class="project">
                            <div class="projectNameHolder">
                                <h2 class="smallh2">name</h2>
                                <h1>This Website</h1>
                            </div>
                            <div class="projectDiscriptionMenu">
                                <h2 class="smallh2">discription</h2>
                                <h1>AHAHAHAH</h1>
                            </div>
                            <div class="dropdownDiv">
                                <button class="dropdownButton" onclick="enableDropdown(0, '26px')">AHH</button>
                                <div class="dropdown">
                                    <p>dsfiuhgsfd</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                function serverPing($server, $port){
                    //        |ip      |port|err code|err msg|cooldown|
                    fsockopen($server, $port, $errno, $errstr, 0.05);

                    return ($errno === 0);
                };

                $servers = array(
                    array("Create Custom Server", "73.227.72.204", "25566", true, "#createCustomInstall"),
                    array("Hypixel", "mc.hypixel.net", "25565", false),
                );
                error_reporting(0);
            ?>
            <div class="pageContainer">
                <div class="serverTableContainer">
                    <table class="serverTable">
                        <thead>
                            <tr>
                                <th>Server</th>
                                <th>Address</th>
                                <th>Port</th>
                            </tr>
                        </thead>
                        <tbody class="serverTableTBody">
                            <?php
                        foreach($servers as $server){
                            $online = serverPing($server[1], $server[2]);
                            $alink = $server[3];
                            $alinkEle = $server[4];
                            
                        ?>
                            <tr class="<?php if ($online == 1) { echo "active"; } ?>">
                                <td><?php if($alink == true) { echo "<a herf='javascript:alert('Hello World!');'>" ?>
                                    <?php echo $server[0] ?> <?php echo "</a>"; }else { echo $server[0]; } ?></td>
                                <td><?php echo $server[1] ?></td>
                                <td><?php echo $server[2] ?></td>
                            </tr>
                            <?php
                        };
                        ?>
                        </tbody>
                    </table>
                    <div><a>all modded servers(ex. create above and beyond) should be downloaded at curseforge unless
                            directed otherwise</a></div>
                </div>
                <!-- <div class="instContainer">
                    <div class="instHeader">
                        <div class="block"><span>Install</span>1</div>
                        <h3>Create Custom Server</h3>
                    </div>
                    <div class="instBody">
                        <p>

                        </p>
                    </div>
                </div>
                <div class="instContainer">
                    <div class="instHeader">
                        <div class="block"><span>Dynmap</span></div>
                        <h3>Create Custom Server</h3>
                    </div>
                    <div class="instBody size">
                        <iframe class="dynmap" src="http://73.4.188.149:8123/"></iframe>
                    </div>
                </div> -->
            </div>
            <div class="pageContainer">
                <?php
            session_start();

            if(isset($_POST['submit_pass']) && $_POST['pass']) 
            {
                $pass=$_POST['pass'];
                if($pass=="123")
            {
                $_SESSION['password']=$pass;
            }
            else
            {
                $error="Incorrect Pssword";
            }
            }

            if(isset($_POST['page_logout']))
            {
                unset($_SESSION['password']);
            }
            ?>

                <?php
            if($_SESSION['password']=="123")
            {
            ?>
                <h1>Yup</h1>
                <form method="POST" action="" class="logout_form">
                    <input type="submit" name="page_logout" value="LOGOUT">
                </form>
                <?php
            }
            else
            {
            ?>
                <form method="POST" action="" class="enter_form">
                    <h1>LOGIN</h1>
                    <input type="password" name="pass">
                    <input type="submit" name="submit_pass" value="ENTER">
                    <p>
                        <font style="color:red;"><?php echo $error;?></font>
                    </p>
                </form>
                <?php
            }
            ?>
            </div>
            <div class="closer">
                Made Well-Enough by Samir
            </div>
        </div>
    </div>

</body>
<script src="tabControl.js"></script>

</html>