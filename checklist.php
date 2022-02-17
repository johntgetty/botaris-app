<<?php
include_once 'header.php'
?> 
<!-- CONTENT (directly below Botaris logo) -->
<h2 class="pb-1">Daily Checklist for Team 2</h2>
    <h4>Tuesday, February 15, 2022</h4>
    <p class="text-danger">Is this today's date?</p>
    <p class="text-danger">
        ***The red outlined button is for unchecked item. Filled green
        button is for checked item. Both with not appear at the same time.
        Once the red button is checked it will become green.***
    </p>
    <h2 class="pb-md-2">Check before leaving for the day</h2>

    <div class="form pb-3">
        <div class="form-check">
            <label class="btn btn-outline-danger" for="danger-outlined">Pure Gasoline</label>
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off" />
            <label class="btn btn-outline-success" for="danger-outlined">Pure Gasoline</label>
        </div>
        <div class="form-check">
            <label class="btn btn-outline-danger" for="danger-outlined">Mixed Gasoline</label>
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off" />
            <label class="btn btn-success" for="danger-outlined">Mixed Gasoline</label>
        </div>
        <div class="form-check">
            <label class="btn btn-outline-danger" for="danger-outlined">Two-stroke Oil</label>
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off" />
            <label class="btn btn-success" for="danger-outlined">Two-stroke Oil</label>
        </div>
        <div class="form-check pb-3">
            <label class="btn btn-outline-danger" for="danger-outlined">Whip Wire</label>
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off" />
            <label class="btn btn-success" for="danger-outlined">Whip Wire</label>
        </div>
        <h2 class="pb-2">Check upon arrival at first property</h2>
        <div class="form-check">
            <label class="btn btn-outline-danger" for="danger-outlined">Mower Oil Level</label>
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off" />
            <label class="btn btn-success" for="danger-outlined">Mower Oil Level</label>
        </div>
        <label class="btn btn-outline-danger" for="danger-outlined">Fill Mowers/Whips/Blowers with Gasoline</label>
        <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off" />
        <label class="btn btn-success" for="danger-outlined">Fill Mowers/Whips/Blowers with Gasoline</label>
    </div>
    </div>
    </div>
    </section>
    <?php include_once 'footer.php' ?>