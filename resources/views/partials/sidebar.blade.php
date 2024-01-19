<div class="my-sidebar  ">
    <div>
        <div class="text-center  py-4 text-light  " style="min-height: 80px">
            @auth
                <h4>{{ Auth::user()->name }}</h4>
            @else
                <h4>Ospite</h4>
            @endauth
        </div>
    </div>
    <ul class=" list-unstyled mt-5 pt-5 ms-4">
        <li>
            <a class="text-light fs-5 text-decoration-none" href="{{ route('admin.projects.index') }}">Project</a>
        </li>
        <li>
            <a class="text-light fs-5 text-decoration-none" href="{{ route('admin.types.index') }}">Type</a>
        </li>
        <li>
            <a class="text-light fs-5 text-decoration-none" href="{{ route('admin.technologies.index') }}">Technology</a>
        </li>
    </ul>
</div>
