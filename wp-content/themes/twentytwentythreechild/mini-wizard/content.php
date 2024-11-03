<?php 
 include 'constants.php';
?>

<div class="row" style="height: 100%;">
    <div class="p-0" id="step-1">
        <form class="d-flex flex-column" id="step-1-form" style="height: 100%;" >
            <?php get_template_part('mini-wizard/title', null, ['title' => $FORM_STEPS[0]]);?>
            <div class="flex-grow-1 d-flex flex-column">
                <label for="name">
                    Name
                    <input id="name" type="text">
                </label>
                <label for="email">
                    Email, required
                    <input required id="email" type="email">
                </label>
                <label for="phone">
                    Phone
                    <input id="phone" type="tel">
                </label>
            </div>
            <div><button type="submit">Continue</button></div>
        </form>
    </div>
    <div class="step-disabled" id="step-2">
        <form class="d-flex flex-column" style="height: 100%;" >
        <?php get_template_part('mini-wizard/title', null, ['title' => $FORM_STEPS[1]]);?>
            <div class="flex-grow-1 d-flex flex-column">
                <label for="quantity">
                    Quantity, required
                    <input required id="quantity" type="number" min="1" max="1000" >
                </label>
            </div>
            <div><button type="submit">Continue</button><button id="step-2-back-button">Back</button></div>
        </form>        

        <div></div>
    </div>
    <div class="step-disabled" id="step-3">
        <?php get_template_part('mini-wizard/title', null, ['title' => $FORM_STEPS[2]]);?>
    </div>
    <div class="step-disabled" id="step-4">
        <?php get_template_part('mini-wizard/title', null, ['title' => $FORM_STEPS[3]]);?>
    </div>
</div>
