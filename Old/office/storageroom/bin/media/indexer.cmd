echo ^<^?xml version="1.0" encoding="UTF-8"^?^> >> media.az
echo ^<media^> >> media.az
for %%j in (*.JFIF, *.png, *.JPG, *.GIF) do echo ^<image^>'^<img src=^"./%%j^" style="width:176px;height:300px"^>'^</image^>  >> media.az
for %%j in (*.mp3, *.wav, *.flac) do echo ^<audio^>'^<audio src=^"./%%j^" style="width:176px;height:300px"^>'^</audio^>  >> media.az
echo ^</media^> >> media.az