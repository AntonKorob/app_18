<?php require_once "./api/api_msk.php";?>
<div class="date text-center bg-secondary rounded p-2 m-2">
    <h3 class="text-light">
        Погода в <?php echo $dt_msk?>
        <?php 
                        $date = date('d . M . Y');
                        echo $date;
                    ?>
    </h3>
</div>

<div class="vstack gap-2 col-md-5 mx-auto">

    <button type="button" class="btn btn-secondary">

        <?php echo 'В городе : ' . $dt_msk . ' температура днем : '.  $dt_temp_msk;?>

        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
            class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
            <path
                d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708">
            </path>
        </svg>
    </button>

    <button type="button"
        class="btn btn-outline-secondary"><?php echo 'В городе : ' . $dt_msk . ' погода: '. $dt_sky_msk ;?></button>
</div>
</button>