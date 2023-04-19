<div class="dark:text-gray-200 text-gray-800 px-4 space-y-1">
    <div class="space-x-1">
        <x-button href="{{route('admin.social.group.posts', $row->id)}}" label="posts" teal/>
        <x-button href="{{route('admin.social.group.users', $row->id)}}" label="users" teal/>
    </div>
    @if(isset($row->description))
        <div>Descrição: {{e($row->description)}}</div>
    @endif
</div>
