<?php
$txt1 = 'Dateneingabe';
$txt2 = 'Preview';
$txt3 = 'Choose a package';
$txt4 = 'Checkout';
if (ISMOBILEDEVICE()) { ?>
    <div class="res-progress">
        <span id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active"><span>1</span><?= $txt1; ?></li>
                <li class="none"><span>2</span><?= $txt2; ?></li>
                <li class="none"><span>3</span><?= $txt3; ?></li>
                <li class="none"><span>4</span><?= $txt4; ?></li>
            </ul>
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

function afterFormDiv()
{
    $txt1 = 'Dateneingabe';
    $txt2 = 'Preview';
    $txt3 = 'Choose a package';
    $txt4 = 'Checkout';
    ?>
    <div class="res-progress">
        <span id="msform">
            <!-- progressbar -->
             <ul id="progressbar" class="afterFormUl">
                 <li class=""><span>1</span><?= $txt1; ?></li>
                <li class=""><span>2</span><?= $txt2; ?></li>
                <li class=""><span>3</span><?= $txt3; ?></li>
                <li class=""><span>4</span><?= $txt4; ?></li>
            </ul>
        </span>
    </div>
<?php }

?>