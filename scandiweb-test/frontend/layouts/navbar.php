<nav class="navbar navbar-expand-lg navbar-dark bg-white">
    <div class="container">
        <?php if ($_SERVER['REQUEST_URI'] == '/') { ?>
            <h1>Product List</h1>
            <div class="navbar-collapse text-right justify-content-end" id="navbarSupportedContent" style="flex-basis: auto !important;">
                <a href="add-product"> <button>ADD </button></a>
                <button style="margin:30px;" id="delete-product-btn">MASS DELETE
                </button>
            </div>
        <?php } ?>
        <?php if ($_SERVER['REQUEST_URI'] == '/add-product') { ?>
            <h1>Product Add</h1>
            <div class="navbar-collapse text-right justify-content-end" id="navbarSupportedContent">
                <button class="" id="save">Save</button>
                <a href="/" class=""><button style="margin:30px;">Cancel </button></a></a>
            </div>
        <?php } ?>
    </div>
</nav>