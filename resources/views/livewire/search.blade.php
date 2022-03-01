<div class="hero__search__form">
    <form wire:submit.prevent="search">
        @csrf
        <div>
            <select name="category" id="" class="" wire:model="category">
                <option value="all" selected>all categories</option>
                @foreach($categories as $item) 
                    <option value="{{$item->name}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <input type="text" name="serach" placeholder="What do yo u need?" wire:model="searchWord">
        <button type="submit" class="site-btn">SEARCH</button>
    </form>
</div>