<?php

return function ($site) {
	return $site->index()->filterBy("template", "in" ,["projet", "actu", "agence"])->listed();
	// return $site->index()->filterBy("template", "actu");
};