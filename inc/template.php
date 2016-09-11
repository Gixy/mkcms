<!DOCTYPE html>
<html>
    <head>
        <!-- Meta-data -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie-edge">

        <!-- Stylesheets -->
        <?php
            foreach($this->styles as $style){
                echo '<link href="' . $style . '" rel="stylesheet" type="text/css" />' . "\n";
            }
        ?>

        <title><?php echo $this->title; ?></title>
    </head>
    <body>
        <div id="header">
            <div class="header-box">
                <div class="brand-icon">

                </div>
                <ul class="nav-menu">

                </ul>
            </div>
        </div>
        <?php echo $this->body; ?>
        <!-- Scripts -->
        <?php
        foreach ($this->scripts as $script) {
        	echo '<script src="' . $script . '" language="javascript" type="text/javascript" defer="defer"></script>' . "\n";
        }
        ?>
    </body>
</html>
