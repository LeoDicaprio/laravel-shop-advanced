<?php

return [
    'alipay' => [
        'app_id'         => '2016092200567902',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAoJ/7ETBRiLJ9S+MpnC3XmezVef/HmsvU9ZrBXpl2pp5/Pnz0zbhgLtAhiW8SZ8JXUIVGRrOMylNfotDkFpoYXGq0IbBOD6zcvkX/tg+osLBB+guohdRBFVt4l+3Ohvd5QzwLHPESAKoZPRtXwPDO2zQAkTvlj5B8OxhxAMkyOEVAUHWpq6RAYhOAbPPzRoYD4srj4c/y9QwHTwXpYwm0utptahqgkv/7aTtFt7mE6CbbxoPaBUbxwRSUdSnayMGwlBEQAridQDMuOPXvj3iV6bl/ZZn52nU06OOh7K2WOs16aTJjdlgPYUa4kz51P1ancKDqUYXxbk5j5q/YLEim4QIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA6dJBVmssaUtkeRvYtRFvEMrzbkB+H6EO8tqMFupV571ZNXWdZnqrVyrfK7I17gk/YfpPSMN78Lvmf2+OXgtDtNqpIa5j1iCAWngaYKy+dwOpKSHnFWg5JtbV6H50PUbkU2Qha7h6mYSwv7zs+HhilfnO6gHXIZRCgWnUeuqkwiBpbxT4IaI1oL+2sICxKqhPnmM7U4jJMQOOsjBSAZ7iK4W01OZhkoXUOEKvghWWLrx7oTBmpOOEuB+HCHpmczBJD4R2Y+gL74YI2/xxsrquCTFf18oVhqkRbF49CS4bXwQItDdaMKPcHTUi2LEffY1qlpz2mtiBctNzFAZzZ0VdbwIDAQABAoIBAQC2N42FjFX65K8zFnlmemSkoJTeydHAUmJ07c4YmZxC0bPwzmzQjS5z6swqoGIY1AoaD9izquwuqjAyBbzcG0kzaug9gEr7dy6v0kM0LcrssuSkUnBkpWlMlEX1Pn7VtiZ/ulu1N/oLI3YeplvCMwcZO6l9gdumpoTBl7jn5W5qfRx4UrM81KCj8kC5YD93cgvl0sIDH5s3RaGLepBCZTo+GT9Mi2Gjq7mefdGSeF+DLfj78CO8g4fJjyUpVZX6VE/ROK7YNBFvF7m+ftYlmWTnReNTd3EbZ+k0vMbgCh5+E/ep8lBjiLxtjctRK2SQdBbPT1iS4909pSG2HKdCRojpAoGBAPS7ZfU3qww8T5/zkogZGcY2Mil8BNlKLuXn67YJ9oBLSjlbk6WwLmzudgy2SKaq5V7cZAo4Qk4Hpw2i+UOLU/+KNtyPb0HIql113V4HHHVwxHEWEn3/C41rRwM47onZ5lrT+qkaweW+IeCY3WaC681ctPUD/B1y48xHE2/HAQYVAoGBAPSWQTnsN3vfwl/kLYSz0RM4MHgSLsya0BqcpPCDKAVPRnzVVT/OXXO30KfTvtnLGYBQ7Nz//7tIZI0aXUQMX+cmJ5TNlc72geH0ABtXnKop7W7yqiu2i+8YvpaBGh4tipnFgDj6cvEzvduLdMIjNCQshv27ylH1G3+gj/YsS5pzAoGALU+9EufZrYxFGdJZIQW0tfQ22WNy6mBHyp1kEPJLR3mpJnGEJrs1/UkxZi0hymn9ydB4XUQJUrUsAuRXzl+vj7KhcbjE2qMyl9dIwy4B4OSeGmoBxn5AP1DLdxdFYxSLB+oTkNe5arYHQ7RJ2b8HtaAiiPLR7Qnmj13hhWKNF/kCgYA+NZ1feypdknsg4quFLitGZStGzvEiT1oQ+rilB+b8+r3l8GjfcsCoNx+WIDBRuuvAjFTCnUZRP0d78DG6ph8absTwfx3UZzR/4QzJ543MZh+i8YvA1IxhAv0u0KVw+YpgNDC5zVHA8bUfiyfmXQfdD4pCLSp3kA0veApFxdxw6wKBgBUCHmoHdFVv8XQwGj0vyfzqvYiqE8pvl4UJKYAk7xutJHNTSPfFuCsDRR3saSfk4QnwghlGP8tTyzs9dQvV5HwzibtUDbKQmCZlNZ9tu4v5QKOVE6Fnpr3aQRswaF9hwbutnS6BSI7CXEECGYEhVAtpRU3fxaHHdeikbyDZzpqW',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => 'wx0d18d3c824847051', //公众号AppID
        'mch_id'      => '1512993341',  //商户号
        'key'         => 'insoby78210m7nd629nx0io92gtyt638',    //API秘钥
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),    //证书位置
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),     //证书位置
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];