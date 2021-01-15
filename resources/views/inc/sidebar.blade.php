<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/dashboard">
                  <span data-feather="home"></span>
                  Dashboard  
                </a>
              </li>
              @if(Auth::user() && count(Auth::user()->isAdmin)>0 )
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/product">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
                  <ul ><li><a class="nav-link" href="/product/category">
                  <span data-feather="shopping-cart"></span>
                  Products Category
                  </a></li></ul>
                
              </li>
             

              <li class="nav-item">
                <a class="nav-link" href="/user">
                  <span data-feather="users"></span>
                  Users
                </a>
                <ul ><li><a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  User's Role
                  </a></li></ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              @endif
            </ul>

            
          </div>
        </nav>