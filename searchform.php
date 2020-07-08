<form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <div class="form-group">
        <label for="search">Pesquisar produtos</label>
        <input type="search" id="search" class="form-control" placeholder="Pesquisar..." value="<?php echo get_search_query(); ?>" name="s">
    </div>
    <button type="submit" class="btn btn-color1 btn-block">Buscar</button>
</form>