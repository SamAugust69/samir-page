<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> 
    <meta property="og:type" content="website">
    <meta property="og:title" content="Samir's Home" />
    <meta property="og:description" content="Lil project I'm working on.  Contains info on minecraft servers I'm running" />
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
                        <a >DESIGN</a>
                        <a href="#projects">PROJECTS</a>
                    </div>
                    <h2>HTML, PHP, CSS, JS, PY, ETC</h2>
                </div>
                <div class="spacer wave1"></div>
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
                    fsockopen($server, $port, $errno, $errstr, 0.1);

                    return ($errno === 0);
                };

                $servers = array(
                    array("73.4.188.149", "25566"),
                    array("mc.hypixel.net", "25565"),
                    array("73.4.188.149", "25565")
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
                        <tbody>
                        <?php
                        foreach($servers as $server){
                            $online = serverPing($server[0], $server[1]);
                        }
                        ?>
                        <script>
                            
                        </script>
                            <tr>
                                <td>Create Above and Beyond</td>
                                <td>73.4.188.149</td>
                                <td>25566</td>
                                <td><?php echo ($online);?></td>
                            </tr>
                            <tr>
                                <td>test</td>
                                <td>73.4.188.149</td>
                                <td>25565</td>
                                <td><?php echo ($online);?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="closer">
                Made Well-Enough by Samir
            </div>
        </div>
    </div>

</body>
<script src="tabControl.js"></script>

</html>