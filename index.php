<?php
include_once 'header.php'
?>
<!-- CONTENT (directly below Botaris logo) -->
<p class="text-danger">***To do list at below***</p>
<h2 class="pb-3">Maintenance Team Portal</h2>
<button class="btn btn-success btn-lg mb-4 w-100" onclick="window.location.href='checklist.php';">
    Daily Checklist
</button>
<button class="btn btn-success btn-lg mb-4 w-100" onclick="window.location.href='report-tool-repair.php';">
    Report Repair
</button>
<img class="img-fluid w-75 px-3" src="img/broken-mower.jpg" alt="" />
</div>
</div>
</section>
<article class="container">
    <h1>Items for Development</h1>
    <ol>
        <li>Add teams</li>
        <li>Add CRUD for manager to maintain and assign repairs</li>
        <li>
            Add CRUD for inventory of maintenamce supplies ie. two-stroke/motor
            oil, whip wire
        </li>
        <li>
            Add different navbar depending who is logged in. User level system
            needs to be created.
        </li>
    </ol>
</article>
<?php include_once 'footer.php' ?>