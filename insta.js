$(document).ready(function(){

var feed = new Instafeed({
  get: 'user',
  userId:960910219,
  accessToken: '879568093.2da7041.38ad209cd744408f8dcae8a31459175d',
  resolution: 'low_resolution',
  filter: function(image) {
    return image.tags.indexOf('uvmcycling') >= 0;
  }
});
feed.run();

});


/*https://instagram.com/oauth/authorize/?client_id=2da7041f769c4d43a1bfbbefa32c571a&redirect_uri=https://mmurph23.w3.uvm.edu/cs142/assignment7/index.php&response_type=token

User ID: 960910219

Username: uvmcycling
Name: UVMcycling

access_token=879568093.2da7041.38ad209cd744408f8dcae8a31459175d

CLIENT ID	2da7041f769c4d43a1bfbbefa32c571a
            2da7041f769c4d43a1bfbbefa32c571a
CLIENT SECRET	540546bd24894eeb83cb01dd5791cb9b*/