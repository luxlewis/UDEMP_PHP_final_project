<?php
  //nav menu items
  $navItems = array(

    array(
      slug => "index.php",
      title => "Home"
    ),
    array(
      slug => "team.php",
      title => "Team"
    ),
    array(
      slug => "menu.php",
      title => "Menu"
    ),
    array(
      slug => "contact.php",
      title => "Contact"
    )
  );

  $teamMembers = array(
                    array(
                        name => "Frankie III",
                        position => "Owner",
                        bio => "Frankie is the great-grandson of the original owner of Franklin's Fine Dining. He cooks a mean fritatta!",
                        img => "frankie"
                    ),
                    array(
                        name => "Francis",
                        position => "General Manager",
                        bio => "Francis knows her stuff. The big sister of Frankie himself, she runs the show. Don't miss her Margarita Mondays!",
                        img => "francis"
                    ),
                    array(
                        name => "Carlos",
                        position => "Head Chef",
                        bio => "Carlos is the epitome of the phrase &ldquo;Don't judge a book by it's cover&rdquo; You simply cannot find a better chef.",
                        img => "carlos"
                    ),
                  );

  $menuItems = array(
        "club-sandwich" => array(

                  title => "Club Sandwich",
                  price => 11,
                  blurb => "Bacon ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                  drink => "Club Soda"
                ),

        "dill-salmon" => array(

                title => "Lemon &amp; Dill Salmon",
                price => 18,
                blurb => "Salmon ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                drink => "Fancy Wine"
              ),
        "super-salad" => array(

                title => "The Super Salad<sup>&reg;</sup>",
                price => 34,
                blurb => "Salad ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                drink => "Jug o' Water"
              ),
        "mexican-barbacoa" => array(

                title => "Mexican Barbacoa",
                price => 23,
                blurb => "BBQ ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                drink => "Cerveza with Lime"
              )
          );
?>
