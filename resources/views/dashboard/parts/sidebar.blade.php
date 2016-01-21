<div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h3 class="animated text-center">{!! date('d/m H:i') !!}</h3>
                    </li>
                    <li class="ripple">
                      <a href="{!! route('dashboard') !!}"><span class="fa-home fa"></span> Dashboard
                      </a>
                    </li>
                    <li class="ripple">
                        <a class="tree-toggle nav-header">
                            <span class="fa-area-chart fa"></span> Orçamento
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                        </a>
                        <ul class="nav nav-list tree">
                            <li><a href="{!! route('orcamento_list') !!}">Listar</a></li>
                            <li><a href="{!! route('orcamento_add') !!}">Novo</a></li>
                            <!-- <li><a href="{!! route('orcamento_edit') !!}">Edtar</a></li> -->
                        </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-credit-card"></span> Contas
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="{!! route('conta_list') !!}">Listar</a></li>
                        <li><a href="{!! route('conta_create') !!}">Nova</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-cart-arrow-down"></span> Despesas
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="topnav.html">Listar</a></li>
                        <li><a href="boxed.html">Nova</a></li>
                        <li><a href="topnav.html">Relatorios</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-money"></span> Receitas
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="topnav.html">Listar</a></li>
                        <li><a href="boxed.html">Nova</a></li>
                        <li><a href="topnav.html">Relatorios</a></li>
                      </ul>
                    </li>
                    <li><a href="credits.html">Credits</a></li>
                  </ul>
                </div>
            </div>