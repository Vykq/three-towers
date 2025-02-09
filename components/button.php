<?php
$button = $args['button'];
$title = $button['title'];
$url = $button['url'];
$name = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));

?>

<a href="<?php echo $url; ?>" class="button button--primary">
    <svg class="left-side" width="34" height="52" viewBox="0 0 34 52" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4588 2.41433C18.5498 1.04659 20.2043 0.25 21.9538 0.25H33.6041V1.75H21.9538C20.6607 1.75 19.4378 2.33878 18.6314 3.34972L2.67757 23.3497C1.44081 24.9001 1.44081 27.0999 2.67757 28.6503L18.6314 48.6503C19.4378 49.6612 20.6607 50.25 21.9538 50.25H33.6041V51.75H21.9538C20.2042 51.75 18.5498 50.9534 17.4588 49.5857L1.50495 29.5857C-0.168316 27.488 -0.168316 24.512 1.50495 22.4143L17.4588 2.41433Z" fill="url(#<?php echo $name; ?>)"/>
        <defs>
            <linearGradient id="<?php echo $name; ?>" x1="16.927" y1="0.25" x2="16.927" y2="51.75" gradientUnits="userSpaceOnUse">
                <stop stop-color="#5EDFFF"/>
                <stop offset="1" stop-color="#1D58F5"/>
            </linearGradient>
        </defs>
    </svg>
    <span class="text">
        <?php echo $title; ?>
    </span>
    <svg class="right-side" width="34" height="52" viewBox="0 0 34 52" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4.76837e-07 1H11.6502C13.1716 1 14.6102 1.69269 15.559 2.88203L31.5128 22.882C32.9678 24.7061 32.9678 27.2939 31.5128 29.118L15.559 49.118C14.6102 50.3073 13.1716 51 11.6502 51H4.76837e-07" stroke="url(#<?php echo $name; ?>)" stroke-width="1.5"/>
        <defs>
            <linearGradient id="<?php echo $name; ?>" x1="16.927" y1="0.25" x2="16.927" y2="51.75" gradientUnits="userSpaceOnUse">
                <stop stop-color="#5EDFFF"/>
                <stop offset="1" stop-color="#1D58F5"/>
            </linearGradient>
        </defs>
    </svg>
</a>