#!/bin/bash

ORACLE_BASE=/u01/app/oracle; export ORACLE_BASE;
ORACLE_HOME=/u01/app/oracle/product/11.2.0/xe; export ORACLE_HOME;
NLS_LANG=AMERICAN_AMERICA.AL32UTF8; export NLS_LANG;
ORACLE_SID=XE; export ORACLE_SID;

$ORACLE_HOME/bin/rman target $1/$2 <<EOF
BACKUP INCREMENTAL FROM SCN $3 DATABASE FORMAT '/u01/app/inc_backup/inc_bkp_%U';
EOF


