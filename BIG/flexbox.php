<?php include 'includes/header.php'?>


<!-- START LEFT COL -->



<section>
 <h2 >What is Flexbox?</h2>
<p>
Flexbox is a CSS3 Web Layout model. It its flex layout allows responsive elements within a container to be automatically arranged depending upon screen size and device.CSS flex-box layout is a particular way to specify the layout of HTML pages. One of the most defining features of the flex layout is its ability to form-fit, based on its viewing environment. Flex boxes can adjust in size—either decreasing, to avoid unnecessarily monopolizing space, or increasing to make room for contents to be constrained within its boundaries. Moreover, the flex layout is less restrictive in terms of content flow than those, for example, of the block and inline display types, which are generally uni-directional. Indeed, not only can flex directional flow be specified, at the style level, as rightwards, leftwards, upwards, or downwards; individual items within a flex container may also be automatically reordered and rearranged to suit the available layout space.Following are a few terms associated with the flex layout model</p>
    
    

<h2>Flex container</h2>
<p>  Parent element that holds all flex items. Using the CSS display property, the container can be defined as either flex or inline-flex.<p> 
<h2>Flex item </h2>
<p>Any direct child element held within the flex container is considered a flex item. Any text within the container element is wrapped in an unknown flex item.</p>
<h2>Axes</h2>
<p>Each flex box contains two axes: the main and cross axes. The main axis is the axis on which the items align with each other. The cross axis is perpendicular to the main axis.</p>
<h2>Flex-direction</h2>
<p>Establishes main axis. Possible arguments: row (default), row-reverse, column, column-reverse.
<h2>Justify-content</h2>
<p>Determines how content gets placed on the main axis on the current line. Optional arguments: left, right, center, space-between, space-around.</p>
<h2>Align-items</h2>
<p>Determines the default for how flex items get placed on the cross axis on each line.</p>
<h2>Align-content</h2>
<p>Determines the default for how cross axis lines are aligned.</p>
<h2>Align-self</h2>
<p>Determines how a single item is placed along the cross axis. This overrides any defaults set by align-items.</p>
<h2>Directions</h2>
<p>The main-start/main-end sides determine where to start placing flex items within the flex container, starting from the main-start end and going to the main-end end. The cross-start/cross-end sides determine where flex lines get filled with flex items from cross-start to cross-end.</p>
<h2>Order</h2>
<p>Places elements in groups and determines which order they are to be placed in within the container.</p>
<h2>Flex-flow</h2>
    <p>Shorthands flex-direction and flex-wrap to place the flex content.</p>
<h2>Lines</h2>
<p>Flex items can either be placed on a singular line or on multiple lines as defined by the flex-wrap property, which controls both the direction of the cross axis and how lines stack within the container.</p>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
<h3>Citations</h3>
    <p>“Everything You Need To Know About Alignment In Flexbox.” by: Rachel Andrew <br />
        <a href="https://www.smashingmagazine.com/2018/08/flexbox-alignment/">Smashing Magazine</a>.
</p>
    <p>“What Happens When You Create A Flexbox Flex Container?” by: Rachel Andrew <br />
        <a href="https://www.smashingmagazine.com/2018/08/flexbox-display-flex-container/">Smashing Magazine</a>
</p>

</aside>
<!-- END RIGHT COL -->
 
<?php include 'includes/footer.php'?>

