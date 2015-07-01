{
  "id":224,
  "name":"mnn_resourcenodes",
  "formtabs":[
    {
      "MIGX_id":119,
      "caption":"Nodes",
      "print_before_tabs":"0",
      "fields":[
        {
          "MIGX_id":468,
          "field":"nodes",
          "caption":"Nodes",
          "description":"",
          "description_is_code":"0",
          "inputTV":"",
          "inputTVtype":"migxdb",
          "validation":"",
          "configs":"mnn_nodenodes",
          "restrictive_condition":"",
          "display":"",
          "sourceFrom":"config",
          "sources":"",
          "inputOptionValues":"",
          "default":"",
          "useDefaultIfEmpty":"0",
          "pos":1
        }
      ],
      "pos":1
    },
    {
      "MIGX_id":117,
      "caption":"Name",
      "print_before_tabs":"0",
      "fields":[
        {
          "MIGX_id":464,
          "field":"name",
          "caption":"Name",
          "description":"",
          "description_is_code":"0",
          "inputTV":"",
          "inputTVtype":"",
          "validation":"",
          "configs":"",
          "restrictive_condition":"",
          "display":"",
          "sourceFrom":"config",
          "sources":"",
          "inputOptionValues":"",
          "default":"",
          "useDefaultIfEmpty":"0",
          "pos":1
        }
      ],
      "pos":2
    }
  ],
  "contextmenus":"update||remove",
  "actionbuttons":"addItem",
  "columnbuttons":"",
  "filters":"",
  "extended":{
    "migx_add":"Add Node",
    "disable_add_item":"",
    "add_items_directly":"",
    "formcaption":"",
    "update_win_title":"",
    "win_id":"mnn_resourcenodes",
    "maxRecords":"",
    "addNewItemAt":"bottom",
    "multiple_formtabs":"",
    "multiple_formtabs_label":"",
    "multiple_formtabs_field":"",
    "multiple_formtabs_optionstext":"",
    "multiple_formtabs_optionsvalue":"",
    "actionbuttonsperrow":4,
    "winbuttonslist":"",
    "extrahandlers":"this.handleColumnSwitch",
    "filtersperrow":4,
    "packageName":"migxnestednodes",
    "classname":"mnnNode",
    "task":"resourcenodes",
    "getlistsort":"",
    "getlistsortdir":"",
    "sortconfig":"",
    "gridpagesize":"",
    "use_custom_prefix":"0",
    "prefix":"",
    "grid":"",
    "gridload_mode":1,
    "check_resid":"0",
    "check_resid_TV":"",
    "join_alias":"",
    "has_jointable":"yes",
    "getlistwhere":"",
    "joins":"",
    "hooksnippets":"",
    "cmpmaincaption":"MigxResourceCategories",
    "cmptabcaption":"Categories",
    "cmptabdescription":"Manage Categories for migxResourceCategories here",
    "cmptabcontroller":"",
    "winbuttons":"",
    "onsubmitsuccess":"",
    "submitparams":""
  },
  "columns":[
    {
      "MIGX_id":1,
      "header":"ID",
      "dataIndex":"id",
      "width":10,
      "sortable":"false",
      "show_in_grid":1,
      "renderer":"",
      "clickaction":"",
      "selectorconfig":"",
      "renderchunktpl":"",
      "renderoptions":"",
      "editor":""
    },
    {
      "MIGX_id":2,
      "header":"Category",
      "dataIndex":"name",
      "width":40,
      "sortable":"false",
      "show_in_grid":1,
      "renderer":"",
      "clickaction":"",
      "selectorconfig":"",
      "renderchunktpl":"",
      "renderoptions":"",
      "editor":""
    },
    {
      "MIGX_id":3,
      "header":"Joined",
      "dataIndex":"joined",
      "width":10,
      "sortable":"false",
      "show_in_grid":1,
      "renderer":"this.renderSwitchStatusOptions",
      "clickaction":"switchOption",
      "selectorconfig":"",
      "renderchunktpl":"",
      "renderoptions":[
        {
          "MIGX_id":1,
          "name":"joined",
          "use_as_fallback":"",
          "value":1,
          "clickaction":"",
          "handler":"",
          "image":"assets\/components\/migx\/style\/images\/cb_ticked.png"
        },
        {
          "MIGX_id":2,
          "name":"unjoined",
          "use_as_fallback":1,
          "value":"0",
          "clickaction":"",
          "handler":"",
          "image":"assets\/components\/migx\/style\/images\/cb_empty.png"
        }
      ],
      "editor":""
    }
  ],
  "createdby":1,
  "createdon":"2015-07-01 09:14:17",
  "editedby":1,
  "editedon":"2015-07-01 10:02:36",
  "deleted":0,
  "deletedon":null,
  "deletedby":0,
  "published":1,
  "publishedon":null,
  "publishedby":0
}