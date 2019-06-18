<?php
$txt1 = 'Dateneingabe';
$txt2 = 'Vorschau';
$txt3 = 'Paketauswahl';
$txt4 = 'Checkout';
if (ISMOBILEDEVICE()) { ?>
    <div class="res-progress">
        <span id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="">
                     <span class="active">1</span>
                     <span>2</span>
                     <span>3</span>
                     <span>4</span>
                    <p class="progressBarTitle"><?= $txt1; ?></p>
                 </li>
        </span>
    </div>

<?php } else { ?>
    <div id="progressbar-div">
        <ul id="progressbar">
            <li class="active"><?= $txt1; ?></li>
            <li><?= $txt2; ?></li>
            <li><?= $txt3; ?></li>
            <li><?= $txt4; ?></li>
        </ul>
    </div>
<?php }

?>