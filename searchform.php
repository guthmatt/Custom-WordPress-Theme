<div class="card">
    <h5 class="card-header">Search</h5>
    <div class="card-body">
            <form class="input-group" method="get" action="<?php echo home_url(); ?>">
                <input class="form-control" type="search" name="s" placeholder="Searh for..." value="<?php echo get_search_query(); ?>">
                <span class="input-group-btn">
                <input type="submit" id="search-btn" class="btn btn-secondary" value="Go!">
                </span>
            </form>
    </div>
</div>
