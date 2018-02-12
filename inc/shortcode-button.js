(function () {
    tinymce.PluginManager.add('corolate_buttons', function (editor, url) {
        editor.addButton('corolate_buttons', {
            text: 'Youtube Video',
            icon: false,
            type: 'menubutton',
            menu: [{
                    text: 'Videos',
                    menu: [{
                            text: 'Youtube Videos',
                            onclick: function () {
                                editor.windowManager.open({
                                    title: 'Add video ID',
                                    body: [
                                        {
                                            type: 'textbox',
                                            name: 'youTubeVideoId',
                                            label: 'Youtube Video Id',
                                            value: ''
										},
									],
                                    onsubmit: function (e) {
                                        editor.insertContent('[youtube id="' + e.data.youTubeVideoId + '"]');
                                    }
                                });
                            },

                        },
                        {
                            text: 'Vimeo Videos',
                            onclick: function () {
                                editor.windowManager.open({
                                    title: 'Add video ID',
                                    body: [
                                        {
                                            type: 'textbox',
                                            name: 'vimeoVideoId',
                                            label: 'Vimeo Video Id',
                                            value: ''
										},
									],
                                    onsubmit: function (e) {
                                        editor.insertContent('[Vimeo id="' + e.data.vimeoVideoId + '"]');
                                    }
                                });
                            },

                        },
                        //Sub menu Start
                        {
                            text: 'New Videos',
                            onclick: function () {
                                editor.windowManager.open({
                                    title: 'Add video ID',
                                    body: [
                                        {
                                            type: 'textbox',
                                            name: 'newVideoId',
                                            label: 'new Video Id',
                                            value: ''
										},
									],
                                    onsubmit: function (e) {
                                        editor.insertContent('[new id="' + e.data.newVideoId + '"]');
                                    }
                                });
                            },

                }, //Sub menu End
                ], //End menu bracket

            },
            
            //Secound Item Start
                {
                    text: 'Feature',
                    menu: [{
                            text: 'Feature Videos',
                            onclick: function () {
                                editor.windowManager.open({
                                    title: 'Add video ID',
                                    body: [
                                        {
                                            type: 'textbox',
                                            name: 'Feature',
                                            label: 'Feature Video Id',
                                            value: ''
										},
									],
                                    onsubmit: function (e) {
                                        editor.insertContent('[youtube id="' + e.data.Feature + '"]');
                                    }
                                });
                            },
                        }
                     ],
                },
            //Secound Item End
            ],
        });
    });
})();