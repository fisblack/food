
<style>

.nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 14px;
  font-weight: 200;
  /*background-color: #d04b00e3;*/
  background: linear-gradient(to right,  #a52a2a, #d2691e);
  position: fixed;
  top: 0px;
  width: 240px;
  height: 100%;
  color: #e1ffff;
}
.nav-side-menu .brand {
  padding: 0px 15px 0px 15px;
  color:black;
  background-color: #fff;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 16px;
}
.nav-side-menu .brand img{
  width: 100%;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  background-color: #a52a2a;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #ffffff;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #ffffff;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: rgba(255,255,255,.15);
  border: none;
  line-height: 28px;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #b13f3f;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  /*content: "\f105";*/
  content:" ";
  display: inline-block;
  padding-left: 30px;
  padding-right: 30px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  padding-right: 12px;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 15px;
  width: 20px;
  padding-right: 30px;
}
.nav-side-menu li:hover {
  background-color: #b13f3f;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .brand {
    font-size: 22px;
    line-height: 50px !important;
  }
}
.nav-side-menu .menu-list .menu-content {
    display: block;
 }



</style>

<div class="nav-side-menu">
    <div class="brand">
        <img src="{{ asset('images/layouts/back-office/logo.png') }}">
    </div>


        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="gismapsource">
                    <i class="fa fa-dashboard fa-lg"></i> GIS MAP SOURCE
                  </a>
                </li>

                <li>
                  <a href="zoning">
                    <i class="fa fa-dashboard fa-lg"></i> ZONING
                  </a>
                </li>

                <li>
                  <a href="category">
                    <i class="fa fa-dashboard fa-lg"></i> CATEGORY
                  </a>
                </li>

                <li>
                  <a href="static">
                    <i class="fa fa-dashboard fa-lg"></i> STATISTIC
                  </a>
                </li>

                <li>
                  <a href="marketbenchmark">
                    <i class="fa fa-dashboard fa-lg"></i> MARKET BENCHMARK
                  </a>
                </li>

                <li>
                  <a href="marketplace">
                    <i class="fa fa-dashboard fa-lg"></i> MARKET PLACE
                  </a>
                </li>




                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="javascript:void(0)"><i class="fa fa-cog fa-lg"></i> SETTINGS <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="service">
                  <li><a href="content" >CONYENT</a></li>
                  <li><a href="general" >GENERAL</a></li>
                  <li><a href="user" >USERS</a></li>
                </ul>



            </ul>
     </div>
</div>

<script>

$('.collapsed').click(function(){
	$(this).toggleClass('active');
});

</script>
