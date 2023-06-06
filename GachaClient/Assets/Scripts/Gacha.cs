using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.Networking;


public class Gacha : MonoBehaviour
{
    private string url = "http://localhost:8000/api/Gacha";
    [SerializeField] private Text resultText;
    [SerializeField] private GameObject gachaPanel;
    [SerializeField] private GameObject errPanel;

    public void OnClickButton()
    {
        StartCoroutine(GetData());       
    }

    IEnumerator GetData()
    {

        UnityWebRequest request = UnityWebRequest.Get(url);
        yield return request.SendWebRequest();

        //エラー処理
        if(request.isNetworkError)
        {
            resultText.text = "サーバーが起動していません";
        }
        if(request.isHttpError) 
        {
            resultText.text = "URL間違えてます!";
        }
        else
        {
            // 接続
            if(request.responseCode == 200)
            {
                resultText.GetComponent<Text>().text = request.downloadHandler.text;
            }
        }
    }
}
