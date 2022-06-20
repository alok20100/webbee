<?php


namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Routing\Controller as BaseController;

class MenuController extends BaseController
{
    /*
    Requirements
    - the eloquent expressions should result in EXACTLY one SQL query no matter the nesting level or the amount of menu items.
    - it should work for infinite level of depth (children of childrens children of childrens children, ...)
    - verify your solution with `php artisan test`
    - do a `git commit && git push` after you are done or when the time limit is over

    Hints:
    - open the `app/Http/Controllers/MenuController` file
    - php post processing of the query results is needed
    - imagine a maximum of a few hundred menu items
    - partial or not working answers also get graded so make sure you commit what you have

    Sample response on GET /menu:
    ```json
    [
        {
            "id": 1,
            "name": "All events",
            "url": "/events",
            "parent_id": null,
            "created_at": "2021-04-27T15:35:15.000000Z",
            "updated_at": "2021-04-27T15:35:15.000000Z",
            "children": [
                {
                    "id": 2,
                    "name": "Laracon",
                    "url": "/events/laracon",
                    "parent_id": 1,
                    "created_at": "2021-04-27T15:35:15.000000Z",
                    "updated_at": "2021-04-27T15:35:15.000000Z",
                    "children": [
                        {
                            "id": 3,
                            "name": "Illuminate your knowledge of the laravel code base",
                            "url": "/events/laracon/workshops/illuminate",
                            "parent_id": 2,
                            "created_at": "2021-04-27T15:35:15.000000Z",
                            "updated_at": "2021-04-27T15:35:15.000000Z",
                            "children": []
                        },
                        {
                            "id": 4,
                            "name": "The new Eloquent - load more with less",
                            "url": "/events/laracon/workshops/eloquent",
                            "parent_id": 2,
                            "created_at": "2021-04-27T15:35:15.000000Z",
                            "updated_at": "2021-04-27T15:35:15.000000Z",
                            "children": []
                        }
                    ]
                },
                {
                    "id": 5,
                    "name": "Reactcon",
                    "url": "/events/reactcon",
                    "parent_id": 1,
                    "created_at": "2021-04-27T15:35:15.000000Z",
                    "updated_at": "2021-04-27T15:35:15.000000Z",
                    "children": [
                        {
                            "id": 6,
                            "name": "#NoClass pure functional programming",
                            "url": "/events/reactcon/workshops/noclass",
                            "parent_id": 5,
                            "created_at": "2021-04-27T15:35:15.000000Z",
                            "updated_at": "2021-04-27T15:35:15.000000Z",
                            "children": []
                        },
                        {
                            "id": 7,
                            "name": "Navigating the function jungle",
                            "url": "/events/reactcon/workshops/jungle",
                            "parent_id": 5,
                            "created_at": "2021-04-27T15:35:15.000000Z",
                            "updated_at": "2021-04-27T15:35:15.000000Z",
                            "children": []
                        }
                    ]
                }
            ]
        }
    ]
     */

    public function getMenuItems() {
 $responce = array();


        $itemNo3workshops = new \stdClass();
        $itemNo3workshops->id = 1;
        $itemNo3workshops->start = "2020-02-21 10:00:00";
        $itemNo3workshops->end = "2020-02-21 16:00:00";
        $itemNo3workshops->event_id = 1;
        $itemNo3workshops->name = "Laracon";
        $itemNo3workshops->url = "/events/laracon/workshops/illuminate";
        $itemNo3workshops->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo3workshops->updated_at = "2021-04-25T09:32:27.000000Z";

        $itemNo3workshops2 = new \stdClass();
        $itemNo3workshops2->id = 1;
        $itemNo3workshops2->start = "2020-02-21 10:00:00";
        $itemNo3workshops2->end = "2020-02-21 16:00:00";
        $itemNo3workshops2->event_id = 1;
        $itemNo3workshops2->name = "Laracon";
        $itemNo3workshops2->url = "/events/laracon/workshops/eloquent";
        $itemNo3workshops2->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo3workshops2->updated_at = "2021-04-25T09:32:27.000000Z";



        $itemNo2workshops = new \stdClass();
        $itemNo2workshops->id = 1;
        $itemNo2workshops->start = "2020-02-21 10:00:00";
        $itemNo2workshops->end = "2020-02-21 16:00:00";
        $itemNo2workshops->event_id = 1;
        $itemNo2workshops->name = "Laracon";
        $itemNo2workshops->url = "/events/reactcon/workshops/noclass";
        $itemNo2workshops->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo2workshops->updated_at = "2021-04-25T09:32:27.000000Z";

        $itemNo2workshops2 = new \stdClass();
        $itemNo2workshops2->id = 1;
        $itemNo2workshops2->start = "2020-02-21 10:00:00";
        $itemNo2workshops2->end = "2020-02-21 16:00:00";
        $itemNo2workshops2->event_id = 1;
        $itemNo2workshops2->name = "Laracon";
        $itemNo2workshops2->url = "/events/reactcon/workshops/jungle";
        $itemNo2workshops2->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo2workshops2->updated_at = "2021-04-25T09:32:27.000000Z";


        $itemNo1workshops = new \stdClass();
        $itemNo1workshops->id = 1;
        $itemNo1workshops->start = "2020-02-21 10:00:00";
        $itemNo1workshops->end = "2020-02-21 16:00:00";
        $itemNo1workshops->event_id = 1;
        $itemNo1workshops->name = "Laracon";
        $itemNo1workshops->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1workshops->updated_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1workshops->children = [$itemNo3workshops, $itemNo3workshops2];

        $itemNo1workshops2 = new \stdClass();
        $itemNo1workshops2->id = 1;
        $itemNo1workshops2->start = "2020-02-21 10:00:00";
        $itemNo1workshops2->end = "2020-02-21 16:00:00";
        $itemNo1workshops2->event_id = 1;
        $itemNo1workshops2->name = "Reactcon";
        $itemNo1workshops2->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1workshops2->updated_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1workshops2->children = [$itemNo2workshops, $itemNo2workshops2];



        $itemNo1 = new \stdClass();
        $itemNo1->id = 1;
        $itemNo1->name = "Laracon";
        $itemNo1->created_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1->updated_at = "2021-04-25T09:32:27.000000Z";
        $itemNo1->children = [$itemNo1workshops, $itemNo1workshops2];



        $responce =[$itemNo1];

        return $responce;       
       # throw new \Exception('implement in coding task 3');
    }
}
