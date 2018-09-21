<!--slider menu-->

<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
	<!--<img id="logo" src="" alt="Logo"/>--> 
</a> </div>		  
<div class="menu">

	<ul id="menu" >

		<li id="menu-home" ><a href=""><i class="fa fa-user"></i><span>Welcome {{Auth::user()->name}}</span></a>
			
			
			<ul id="menu-academico-sub">
				
				<li><a href="{{ route('logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
					Logout</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</li>
			</ul>

		</li>



		<li id="menu-home" ><a href="{{route('admin.dashboard')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>


		<li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Manage Characters</span><span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-boletim" ><a href="{{route('characters.create')}}">Add a Character</a></li>
				<li id="menu-academico-avaliacoes" ><a href="{{route('characters.index')}}">List of Character</a></li>
			</ul>
		</li>

		<li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Manage Debates</span><span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-boletim" ><a href="{{route('debates.create')}}">Add a Debate Topic</a></li>
				<li id="menu-academico-avaliacoes" ><a href="{{route('debates.index')}}">List of Debates</a></li>
			</ul>
		</li>

		<li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Manage Tales</span><span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-boletim" ><a href="{{route('tales.create')}}">Add a Tale</a></li>
				<li id="menu-academico-avaliacoes" ><a href="{{route('tales.index')}}">List of Tales</a></li>
			</ul>
		</li>

		<li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Manage Tags</span><span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-boletim" ><a href="{{route('tags.create')}}">Add a Tag</a></li>
				<li id="menu-academico-avaliacoes" ><a href="{{route('tags.index')}}">List of Tags</a></li>
			</ul>
		</li>

		<li id="menu-academico" ><a href="#"><i class="fa fa-calendar"></i><span>Manage Reviews </span><span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-boletim" ><a href="{{route('reviews.create')}}">Add a Review</a></li>
				<li id="menu-academico-avaliacoes" ><a href="{{route('reviews.index')}}">List of Reviews</a></li>	           
			</ul>
		</li>

		<li id="menu-academico" ><a href="#"><i class="fa fa-download"></i><span>Manage Downloads </span><span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-boletim" ><a href="{{route('downloads.create')}}">Add a File</a></li>
				<li id="menu-academico-avaliacoes" ><a href="{{route('downloads.index')}}">List of Files</a></li>	           
			</ul>
		</li>

		<li id="menu-academico" ><a href="#"><i class="fa fa-photo"></i><span>Add Article Images</span><span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-boletim" ><a href="{{route('articleimages.index')}}">Add Image</a></li>

			</ul>
		</li>

		<li id="menu-academico" ><a href="#"><i class="fa fa-photo"></i><span>Add Coming Soon Images</span><span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-boletim" ><a href="{{route('comingsoon.index')}}">Add Image</a></li>

			</ul>
		</li>


		<li id="menu-academico" ><a href="#"><i class="fa fa-photo"></i><span>Manage Comments</span><span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-boletim" ><a href="{{route('reviews.create')}}">Manage Comments</a></li>

			</ul>
		</li>

		


		<li id="menu-academico" ><a href="#"><i class="fa fa-photo"></i><span>Manage Admins</span><span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-boletim" ><a href="{{route('admins.create')}}">Add Admin</a></li>
				<li id="menu-academico-avaliacoes" ><a href="{{route('admins.index')}}">List of Admins</a></li>			           
			</ul>
		</li>


	</ul>
</div>

