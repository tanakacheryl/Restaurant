<?php
require_once 'functions.php';
include ('header.php');
$row = update_get();
?>
                    <!-- Header -->
                    <header class="header">
                    <nav class="navbar navbar-expand-lg">
                         <div class="container">
                         <a class="navbar-brand d-flex" href="index.php"><h2>Wow Food<em>.</em></h2></a>
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="menu text-right">
                <ul>
                    <li>
                        <a href="admin.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="logout.php?logout">Logout</a>
                    </li>


                </ul>
            </div>
                    </nav>
                    </header>
                    <div class="spacer" style="width: 100%; height: 100px;"></div>


<div class="container">
    <div class="row">
    <div class="col-12 pt-5">
    <?php single_page(); ?>
    <h2 class="pt-5"><?php echo $row['name'] ?></h2>
    
    <!-- <hr>
    <h3>Full Description</h3>
    <br>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate dolor a gravida scelerisque. Vestibulum sed felis convallis, rutrum lorem sit amet, ultricies enim. Sed porta tincidunt dui id bibendum. Proin sodales ac velit vitae faucibus. Proin gravida massa sapien, ut maximus tellus tempus cursus. Duis ac lectus eu augue finibus blandit. Integer dui nunc, varius non euismod a, rhoncus ut ipsum. Ut tempor, nisl a pulvinar scelerisque, elit metus malesuada dolor, et semper arcu velit at erat. Morbi magna sapien, consequat vel diam vitae, volutpat bibendum magna. Mauris magna ante, pulvinar a enim et, facilisis hendrerit elit. Suspendisse vel blandit ligula, et consequat ligula. Vivamus pretium eget ipsum at mollis. Proin porttitor odio id imperdiet pharetra. Donec velit orci, fringilla at gravida non, facilisis eu urna. Nunc nec nisi sit amet enim laoreet aliquet et nec nunc. Cras porttitor ultrices ligula vitae egestas.

Donec eget ligula augue. Ut rutrum elementum nibh, eget iaculis diam accumsan non. Vestibulum dapibus, ante eu tempus pretium, ante felis fermentum magna, in efficitur orci tellus ac tortor. Suspendisse ultricies arcu nec pulvinar consequat. Phasellus maximus mi ipsum, ac ullamcorper dui accumsan a. Vivamus faucibus ultrices erat, at tempor nisi interdum sed. Vestibulum vitae ante est. Vivamus vitae felis quis urna pulvinar eleifend non et sem. Donec sodales rutrum ex ut bibendum. Nunc imperdiet ex mi, eget cursus mauris tempus vitae. Nulla facilisis augue lobortis nulla volutpat auctor. Ut sed enim luctus, laoreet velit non, accumsan tortor. Morbi mattis arcu vel imperdiet consequat. Morbi aliquam elementum orci, id faucibus purus pretium eu.

Vivamus posuere sem sed nisl hendrerit dignissim. Aenean eros quam, sollicitudin ut est pellentesque, tincidunt vulputate purus. In maximus est a purus fermentum rutrum. Vivamus malesuada magna ac leo pretium, sit amet dapibus quam volutpat. Mauris metus mauris, tincidunt non euismod non, sodales accumsan nunc. Pellentesque finibus tempor arcu eu euismod. Maecenas erat nisl, dapibus et tristique gravida, gravida vel massa. Etiam eu ante vulputate, ultrices metus a, gravida sem. Aliquam varius dignissim massa, vitae finibus est viverra eget. Nullam pulvinar ligula non ornare feugiat. Praesent a nulla non sem viverra ultrices. Maecenas finibus, mi in molestie pellentesque, dolor neque sodales dui, ac gravida sem elit ut sapien. Donec auctor laoreet lorem, vulputate vestibulum erat sagittis in. Praesent ipsum dolor, vehicula quis dolor id, tempus mattis quam. Morbi vel ligula et ligula pretium vehicula. Suspendisse blandit dolor nec felis interdum, eu aliquam ipsum pretium.

Etiam nec elit tristique, placerat nisl rutrum, vulputate orci. Nam ac ipsum sem. Etiam id auctor purus. Sed efficitur mi porta lorem tempor rhoncus. In nulla mi, sodales mollis neque tincidunt, dignissim pulvinar est. Praesent et sodales lectus. Nullam quis est id enim convallis luctus sed vitae ex. In eu euismod metus, eget ullamcorper dolor. Etiam pulvinar elementum risus ullamcorper ultricies.

Nulla vulputate diam sit amet posuere posuere. Suspendisse condimentum porta nisi at sagittis. Integer ut lectus velit. Etiam elit magna, semper eu tortor id, malesuada porta leo. Vestibulum quis convallis ligula. Pellentesque porta cursus justo. Morbi eu tortor vel purus vehicula tincidunt. Mauris et lobortis elit. Donec a erat mollis, pellentesque enim ut, scelerisque metus. Aenean leo est, faucibus et metus eget, vulputate mollis turpis. Quisque sit amet dapibus felis. Vivamus gravida maximus enim nec lacinia. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec feugiat, nisi nec volutpat malesuada, arcu nisl vestibulum nisi, at ornare massa orci vel est. </p>
</div>
    </div>
</div> -->

<?php
include ('footer.php');
?>