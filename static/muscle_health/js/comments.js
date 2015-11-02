var json = {
    "forum":[
        {
        "name":"Dan H.",
        "comments":"I keep seeing this - has anyone actually tried it yet? Results?",
        "numberoflikes":"53",
        "posted":"a few seconds ago",
        "avatar":"comments-1.jpg"
        },
        {
        "name":"Zac P.",
        "comments":"bro, Im serious... I´ve been 2 months using this product and the results are really amazing. my routine pretty much remained the same but i've consistently been losing body fat and adding muscle mass. highly recommend.",
        "numberoflikes":"2",
        "posted":"17 minutes ago",
        "avatar":"comments-2.jpg"
        },
        {
        "name":"Fritz C.",
        "comments":"ya i'll second that, crazy results to far. figured I had nothing to lose with a trial like this...glad I gave it a shot",
        "numberoflikes":"40",
        "posted":"21 minutes ago",
        "avatar":"comments-3.jpg"
        },
        {
        "name":"Stephen P.",
        "comments":"anyone here do research on the clinical studies? is it 100% safe?",
        "numberoflikes":"67",
        "posted":"1 hour ago",
        "avatar":"comments-4.jpg"
        },
        {
        "name":"Larry K.",
        "comments":"^yo stephen. I had a buddy of mine (medical-practitioner) read through the studies, he was pretty shocked at how legit they were. I signed up for the trial, couldn't believe how fast I started seeing results",
        "numberoflikes":"2",
        "posted":"2 hours ago",
        "avatar":"comments-5.jpg"
        },
        {
        "name":"Mike D.",
        "comments":"damn! I keep seeing reports about these products. they were initially sold-out when I first tried to get on this muscle stack. finally re-opened it back to the public!",
        "numberoflikes":"2",
        "posted":"8 hours ago",
        "avatar":"comments-6.jpg"
        },
        {
        "name":"Reynan P.",
        "comments":"Ok, I usually don't post on articles like this but my results have been too amazing not to. 4 weeks in, already seeing the 6-pack start to pop. My wife LOVES it! haha",
        "numberoflikes":"2",
        "posted":"14 hours ago",
        "avatar":"comments-7.jpg"
        },
        {
        "name":"Jim S.",
        "comments":"wow thanks for the updates guys, definitely going to give this a shot",
        "numberoflikes":"2",
        "posted":"yesterday",
        "avatar":"comments-8.jpg"
        },


    ]
};

for(var key in json.forum) {
    var obj = json.forum[key];
    $('.commentbox').append(
        '<div class="row">' +
            '<div class="col-xs-3 col-sm-2 text-center"><img src="<?= $assets ?>/img/' + obj.avatar + '"></div>' +
            '<div class="col-xs-9 col-sm-10"><p><strong>' + obj.name + '</strong> &bullet; <span>' + obj.posted +' </span></p>' +
        '<p>' + obj.comments + '</p>' +
           '</div>' +
        '</div>'  +

        '<hr>'

    );
}
