# Navbar `nav-in-center`

Variant of the [Navbar](/?selectedKind=Components/Navbar&selectedStory=Default) component with the centrally located navigation.

<!-- STORY -->

### Usage

```html
<nav class="e-navbar navbar navbar-expand-md card e-navbar--nav-in-center mb-3">
   <div class="e-navbar__cont flex-md-nowrap py-2">

      <button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#nic-collapse">
        <span class="fa fa-bars"></span>
      </button>

      <div class="navbar-brand d-none d-md-block">
        <a class="e-logo mx-4" href="">
          <span>Elements <small>stay simple</small></span>
        </a>
      </div>

      <div class="e-navbar__title navbar-text d-md-none my-2">TITLE</div>

      <div id="nic-collapse" class="e-navbar__nav navbar-collapse order-4 order-md-2 collapse navbar-collapse">
         <div class="d-md-flex">
            <ul class="navbar-nav mr-auto py-3 py-md-0 nav">
               <li class="nav-item"><a href="" class="active nav-link">Overview</a></li>
               <li class="nav-item"><a href="" class="nav-link">Bootstrap</a></li>
               <li class="nav-item"><a href="" class="nav-link">Pages</a></li>
            </ul>
         </div>
      </div>

      <div class="e-navbar__actions ml-3">
        <button class="btn btn-success" type="button">
          <i class="fa fa-user-circle"></i>
          <span class="d-none d-md-inline-block">Morty Smith</span>
        </button>
      </div>
   </div>
</nav>
```

### See Also
- [Bootstrap - Navbar](http://getbootstrap.com/docs/4.0/components/navbar/)
- [Bootstrap - Nav](http://getbootstrap.com/docs/4.1/components/collapse/)
- [Bootstrap - Dropdowns](http://getbootstrap.com/docs/4.1/components/dropdowns/)
