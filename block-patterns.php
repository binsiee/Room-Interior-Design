<?php
/**
 *  eigenes Block Pattern für Single-Posts
 */

function register_project_patterns()
{
    register_block_pattern(
        'room-interior-design/single-post', // Einzigartiger Name (Namespace/Slug)
        [
            'title'       => __('Single Post Layout','room-interior-design'),
            'description' => __('Block Pattern für ein Single-Post-Layout mit Hero-Bereich, Titel, Kategorie und Tags.','room-interior-design'),
            // Kategorien, unter denen das Pattern im Editor erscheint
            'categories'  => ['text','featured'],
            // Hier kommt dein HTML-Code (Gutenberg-Blöcke) als String
            'content'     => '<!-- wp:cover {"url":"http://room-interior-design.local/wp-content/uploads/2025/03/lotus-design-n-print-0sDzRgrN_pI-unsplash.jpg","id":45,"alt":"Luxuriöses Wohnzimmer","dimRatio":0,"isUserOverlayColor":true,"isDark":false,"metadata":{"categories":["text","featured"],"patternName":"room-interior-design/single-post","name":"Single Post Layout"},"className":"post-hero image-overlay","style":{"color":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light post-hero image-overlay"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-45" alt="Luxuriöses Wohnzimmer" src="http://room-interior-design.local/wp-content/uploads/2025/03/lotus-design-n-print-0sDzRgrN_pI-unsplash.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"main-container post-above-level","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group main-container post-above-level"><!-- wp:heading {"level":1,"className":"umbruch","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h1 class="wp-block-heading umbruch has-white-color has-text-color has-link-color">Post<br>titel</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","prefix":"Kategorie: ","className":"umbruch","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /-->

<!-- wp:post-terms {"term":"post_tag","prefix":"Tags: ","className":"umbruch","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"post-content-block","layout":{"type":"constrained"}} -->
<div class="wp-block-group post-content-block"><!-- wp:group {"className":"post-secondary-section main-container","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
<div class="wp-block-group post-secondary-section main-container"><!-- wp:image {"id":42,"sizeSlug":"large","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-large"><img src="http://room-interior-design.local/wp-content/uploads/2025/03/id-interiors-3B8t4vnkXt0-unsplash-1024x576.jpg" alt="Wohnzimmer im Schauraum" class="wp-image-42"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<h2 class="wp-block-heading has-text-align-left">Erste<br>Überschrift</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Studio "Mirabile", nova optima opera in campo designandi, eximiam recentem inceptum praesenterit: transformationem spatii moderni convivii, qui elegantiam, commoditatem et functionem in perfecta harmonia integrat. In hoc commentario diligenter explorabimus varias huius mirabilis incepti facies, ab formatione consiliorum per electionem materiārum usque ad ultimam exsecutionem. Proinde, experientia haec novam perspicientiam in arte designandi praebet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"post-secondary-section main-container","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
<div class="wp-block-group post-secondary-section main-container"><!-- wp:image {"id":45,"sizeSlug":"large","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-large"><img src="http://room-interior-design.local/wp-content/uploads/2025/03/lotus-design-n-print-0sDzRgrN_pI-unsplash-1024x683.jpg" alt="Luxuriöses Wohnzimmer" class="wp-image-45"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"stack","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group stack"><!-- wp:heading {"textAlign":"left","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<h2 class="wp-block-heading has-text-align-left">zweite<br>Überschrift</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Studio "Mirabile", nova optima opera in campo designandi, eximiam recentem inceptum praesenterit: transformationem spatii moderni convivii, qui elegantiam, commoditatem et functionem in perfecta harmonia integrat. In hoc commentario diligenter explorabimus varias huius mirabilis incepti facies, ab formatione consiliorum per electionem materiārum usque ad ultimam exsecutionem. Proinde, experientia haec novam perspicientiam in arte designandi praebet.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<h2 class="wp-block-heading has-text-align-left">dritte<br>Überschrift</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Studio "Mirabile", nova optima opera in campo designandi, eximiam recentem inceptum praesenterit: transformationem spatii moderni convivii, qui elegantiam, commoditatem et functionem in perfecta harmonia integrat. In hoc commentario diligenter explorabimus varias huius mirabilis incepti facies, ab formatione consiliorum per electionem materiārum usque ad ultimam exsecutionem. Proinde, experientia haec novam perspicientiam in arte designandi praebet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"post-secondary-section main-container","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
<div class="wp-block-group post-secondary-section main-container"><!-- wp:image {"id":43,"sizeSlug":"large","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-large"><img src="http://room-interior-design.local/wp-content/uploads/2025/03/jason-wang-NxAwryAbtIw-unsplash-1024x576.jpg" alt="Luxuriöses Lesezimmer" class="wp-image-43"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"stack","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group stack"><!-- wp:heading {"textAlign":"left","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<h2 class="wp-block-heading has-text-align-left">Vierte<br>Überschrift</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Studio "Mirabile", nova optima opera in campo designandi, eximiam recentem inceptum praesenterit: transformationem spatii moderni convivii, qui elegantiam, commoditatem et functionem in perfecta harmonia integrat. In hoc commentario diligenter explorabimus varias huius mirabilis incepti facies, ab formatione consiliorum per electionem materiārum usque ad ultimam exsecutionem. Proinde, experientia haec novam perspicientiam in arte designandi praebet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
        ]
    );
}
add_action('init', 'register_project_patterns');


/**
 * eigenes Block Pattern für die Kontaktseite.
 */

function register_contact_page_pattern()
{
    register_block_pattern(
        'room-interior-design/contact-page',
        [
            'title' => __('Kontaktseite Layout', 'interior-design-translation'),
            'description' => __('Ein Block Pattern für eine Kontaktseite mit großem Titel, Einleitung und Spalten.', 'interior-design-translation'),
            'categories' => ['text', 'featured'], // Unter welchen Kategorien es im Editor erscheinen soll
            'content' => '<!-- wp:group {"className":"big-title-section ","layout":{"type":"default"}} -->
<div class="wp-block-group big-title-section"><!-- wp:group {"className":"big-title-inner-section main-container","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group big-title-inner-section main-container"><!-- wp:paragraph {"className":"big-title "} -->
<p class="big-title ">Kontakt</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"main-container","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group main-container"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">WIE KÖNNEN WIR IHNEN HELFEN</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wir freuen uns, von Ihnen zu hören! Wenn Sie Fragen, Anregungen oder Anliegen haben, können Sie uns jederzeit über die unten stehenden Kontaktdaten erreichen. Unser freundliches und kompetentes Team steht Ihnen gerne zur Verfügung.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Adresse:</strong><br>Interior Design Studio GmbH<br>Musterstraße 123<br>1010 Wien<br>Österreich</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Telefon:</strong><br>+43 1 234 567 890</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>E-Mail:</strong><br>inquery@interior-studio.gmbh</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Öffnungszeiten:</strong><br>Montag – Freitag: 9 – 18 Uhr<br>Samstag: 10 – 14 Uhr</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"selfStretch":"fixed","flexSize":"65px"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"http://room-interior-design.local/wp-content/uploads/2025/03/mapz.png","id":46,"alt":"Maps mit Pin auf Room","dimRatio":50,"customOverlayColor":"#dadbdc","isUserOverlayColor":false,"isDark":false,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#dadbdc"></span><img class="wp-block-cover__image-background wp-image-46" alt="Maps mit Pin auf Room" src="http://room-interior-design.local/wp-content/uploads/2025/03/mapz.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->',
        ]
    );
}

add_action('init', 'register_contact_page_pattern');




