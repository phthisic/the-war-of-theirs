<?php
$pageTitle = "Music";

include 'header.php';
?>

<section class="page-title">
    <h1>Select Music</h1>
</section>

<section id="music-album" class="records">
    <div id="music-album-left">
        <a href="" id="test-section">
            <img src="../images/cover/music_1.jpg" alt="">
        </a>
        <a href="">
            <img src="../images/cover/music_2.jpg" alt="">
        </a>
        <a href="">
            <img src="../images/cover/music_3.jpg" alt="">
        </a>
        <a href="#music-interaction-title">
            <img src="../images/cover/music_4.jpg" alt="">
        </a>
        <a href="">
            <img src="../images/cover/music_5.jpg" alt="">
        </a>
        <a href="">
            <img src="../images/cover/music_6.jpg" alt="">1
        </a>
    </div>
    <div id="music-album-right">
        <a href="">
            <img src="../images/cover/music_7.jpg" alt="">
        </a>
        <a href="">
            <img src="../images/cover/music_8.jpg" alt="">
        </a>
        <a href="">
            <img src="../images/cover/music_9.jpg" alt="">
        </a>
        <a href="">
            <img src="../images/cover/music_10.jpg" alt="">
        </a>
        <a href="">
            <img src="../images/cover/music_11.jpg" alt="">
        </a>
        <a href="">
            <img src="../images/cover/music_12.jpg" alt="">
        </a>
    </div>
</section>

<section class="section-seperate">
    <hr>
    <a href="#music-interaction-title"><img src="../images/arrow_radius.png" alt="down-arrow"></a>
    <hr>
</section>

<section class="page-title" id="music-interaction-title">
    <h1>Music Interaction</h1>
</section>

<section id="song-interaction-page">

    <div id="previous-song" class="song-switch">
        <a href=""><img src="../images/arrow_radius.png" alt=""></a>
    </div>

    <div id="song-interaction">

        <div id="song-cover-play">
            <div id="song-cover">
                <div id="song-cover-image"><img src="../images/cover/music_4.jpg" alt=""></div>
                <div id="song-brief-information">
                    <p>Title: <?php echo $recordTitle; ?><br><br></p>
                    <p>Creator: <?php echo $recordCreator; ?><br><br></p>
                    <p>Subjects: <?php echo $recordSubjects; ?><br><br></p>
                    <p>Description: <?php echo $recordDescription; ?> <br><br></p>
                </div>
            </div>
            <div id="song-play">
                <div id="song-play-disc"><img src="../images/disc.png" alt=""></div>
                <div id="song-play-stylus">
                    <div id="stylus-needle"><a href="#music-interaction-title"><img src="../images/stylus.png" alt=""></a></div>
                    <div id="stylus-basic"><img src="../images/stylus-basic.png" alt=""></div>
                </div>
            </div>

        </div>
        <div id="more-detail">
            <a href="#music-information-page">More detail</a>
        </div>
        <div id="interactive-music-sheet">
            <div><a href=""><img id="music-sheet" src="../images/music_sheet_1.png" alt=""></a></div>
            <a id="hover-box-1" href=""></a>
            <img class="music-to-photo" id="music-to-photo-1" src="../images/photo_1.jpg" alt="">
            <a id="hover-box-2" href="photo.php#photo-detail"></a>
            <img class="music-to-photo" id="music-to-photo-2" src="../images/photo_2.jpg" alt="">
            <a id="hover-box-3" href=""></a>
            <img class="music-to-photo" id="music-to-photo-3" src="../images/photo_3.jpg" alt="">
            <a id="hover-box-4" href=""></a>
            <img class="music-to-photo" id="music-to-photo-4" src="../images/photo_4.jpg" alt="">
        </div>



    </div>

    <div id="next-song" class="song-switch">
        <a href=""><img src="../images/arrow_radius.png" alt=""></a>
    </div>

</section>

<section class="section-seperate">
    <hr>
    <a href="#music-information-title"><img src="../images/arrow_radius.png" alt="down-arrow"></a>
    <hr>
</section>

<section class="page-title" id="music-information-title">
    <h1>Music Information</h1>
</section>

<section id="music-information-page">
    <div id="music-information-complete">
        <div>
            <p>title:</p>
            <p>time:</p>
            <p>people:</p>
            <p>discribe:</p>
        </div>
    </div>
    <div id="music-sheet-complete">
        <div id="previous-page" class="page-switch">
            <a href=""><img src="../images/arrow_radius.png" alt=""></a>
        </div>
        <div id="music-sheet-pages">
            <img src="../images/cover/music_4.jpg" alt="">
        </div>
        <div id="next-page" class="page-switch">
            <a href=""><img src="../images/arrow_radius.png" alt=""></a>
        </div>
    </div>
</section>
</main>

<?php
include 'footer.php';
?>