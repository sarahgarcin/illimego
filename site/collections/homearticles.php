<?php

return function ($site) {
	return $site->index()->filterBy("template", "in" ,["projet", "actu"])->listed();
	// return $site->index()->filterBy("template", "actu");
};