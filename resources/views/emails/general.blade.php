
@extends('layouts.master')

@section('title', $title)
@section('date', date('Y-m-d'))

@section('content')
    <!-- ARTIGO 1 -->
    <TABLE cellspacing="0" cellpadding="0" width="700" align="center" border=0>
        <TR HEIGHT="300" width="700">
            <TD valign=top bgcolor=#F1F1F1 WIDTH="700" >
                <p style="padding-left:20px;padding-right:10px"><font color="#0067ff"><STRONG>{{ $title }}</STRONG></font></p>
                @if ($subtitle)
                <h1 style="padding-left: 20px;padding-right:10px"><font color="#0067ff">{{ $subtitle }}</font></h1>
                @endif
                <p style="padding-left: 20px;padding-right:10px">
                    <font color="#000">

                        {{ $body }}

                        <br><br>
                        Thanks <br><br>
                        <strong>The Task4it Team</strong>
                    </font>
                </p>
            </TD>

            </TR>

            <TR HEIGHT="100" width="700">

            <TD bgcolor=#00a2ff WIDTH="700" HEIGHT="100" >
                <img src="https://s3-eu-west-1.amazonaws.com/static.task4it/email/logo1-email.jpg" alt="logo task4it">
            </TD>

        </TR>

    </TABLE>
@endsection
