<!DOCTYPE html>
<HTML>
<meta content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="global.css">

<body>
    <div id="navBar">
        Matthew Molski
    </div>
    <div class="container">
        <?php
        $projects = ["Number Game 2025", "Family Tree 2024", "Star Visualizer 2024", "Star Classification 2023", "Elgin Park Secondary 2023", "Tournament Software 2019"];
        $links = [
            "https://github.com/MattMatt05/NumberGame",
            "https://github.com/MattMatt05/FamilyTreeSoftware",
            "",
            "https://github.com/haovvrld/DSCI-009-Group-17-Proposal/blob/main/DSC_009_group_17_final_project.ipynb",
            "https://elginparksecondary.com/home.html",
            ""
        ];
        $images = ["/assets/ng.png", "/assets/ftsw.png", "/assets/sv.png", "/assets/sc.png", "/assets/eps.png", "/assets/tsw.png"];
        for ($count = 0; $count < sizeof($projects); $count++) {
            echo "<div class='project'>";
            if ($links[$count] != "") {
                echo "<a class='aContain' href='$links[$count]'>
                <img src='$images[$count] '><a/>
                <p id='projectTitle'>$projects[$count]</p>";
            } else {
                echo "<img src='$images[$count] '>
                <p id='projectTitle'>$projects[$count]</p>";
            }
            echo "</div>";
        } ?>
    </div>
</body>

</HTML>